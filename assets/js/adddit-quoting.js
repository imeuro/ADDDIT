var ENV = window.location.host;
var basePath = '/';
if (ENV == 'localhost' || ENV == 'meuro.dev') {
    basePath = '/ADDDIT/';
}
console.debug(basePath);
let dropArea = document.getElementById("drop-area");
let previewArea = document.getElementById('preview-area');

// Prevent default drag behaviors
['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, preventDefaults, false)
    document.body.addEventListener(eventName, preventDefaults, false)
})

    // Highlight drop area when item is dragged over it
    ;['dragenter', 'dragover'].forEach(eventName => {
        dropArea.addEventListener(eventName, highlight, false)
    })

    ;['dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, unhighlight, false)
    })

// Handle dropped files
dropArea.addEventListener('drop', handleDrop, false)

function preventDefaults(e) {
    e.preventDefault()
    e.stopPropagation()
}

function highlight(e) {
    dropArea.classList.add('highlight')
}

function unhighlight(e) {
    dropArea.classList.remove('highlight')
}

function handleDrop(e) {
    var dt = e.dataTransfer
    var files = dt.files

    handleFiles(files)
}

function handleFiles(files) {
    files = [...files]
    files.forEach(uploadFile)
}

function previewFile3D(file) {

    // initialize the viewer with the parent element and some parameters
    let viewer = new OV.EmbeddedViewer(previewArea, {
        // camera : new OV.Camera (
        // 	new OV.Coord3D (50.0, 50.0, 50.0),
        // 	new OV.Coord3D (0.0, 0.0, 0.0),
        // 	new OV.Coord3D (0.0, 1.0, 0.0),
        // 	50.0
        // ),
        backgroundColor: new OV.RGBAColor(245, 245, 245, 255),
        defaultColor: new OV.RGBColor(200, 200, 200),
        edgeSettings: new OV.EdgeSettings(false, new OV.RGBColor(0, 0, 0), 1),
    });

    // load a model providing model urls
    console.debug('file3D', file);
    viewer.LoadModelFromUrlList(['../' + file]);
    previewArea.getElementsByTagName('label')[0].remove();

    window.addEventListener('resize', () => {
        viewer.Resize();
    });
}

function uploadFile(file, i) {
    var url = basePath+"/_quotePic.php";
    const progress = document.getElementById('progress');

    var data = new FormData()
    data.append('fileToUpload', file);
    data.append('action', 'upload');
    progress.innerText = 'uploading...';
    fetch(url, {
        method: 'POST',
        body: data
    }).then(
        response => response.json()
    ).then(
        success => {
            console.debug(success);
            if (success.success == 1) {
                progress.innerText = success.text;
                document.getElementById('picurl').value = success.filename;
                document.getElementById('quoteID').value = success.quoteID;
                previewFile3D(success.tmp_filePath);
            } else {
                progress.innerText = 'Error: ' + success.text;
            }
        }
    ).catch(
        error => {
            console.debug(error);
            progress.innerText = 'Error: ' + error.text;
        }
    );



}

document.getElementById('get-a-quote').addEventListener('submit', function (e) {
    e.preventDefault();
    const formquote = this;
    moveFile();
    setTimeout(() => {
        formquote.submit(); // Invia il form dopo aver eseguito moveFile
    }, 1500);
});

function moveFile() {
    var url = basePath+"/_quotePic.php";
    var data = new FormData();
    data.append('fileToMove', document.getElementById('picurl').value);
    data.append('action', 'confirm');
    fetch(url, {
        method: 'POST',
        body: data
    }).then(
        response => response.json()
    ).then(
        success => {
            console.debug(success);
            document.getElementById('picurl').value = success.target_file_URL;
        }
    ).catch(
        error => {
            console.debug(error);
        }
    );
}



// SELECT TECNOLOGIA -> MATERIALE
let csvimport = '';
const csvToObject = (csv) => {
    const rows = csv.split('\r\n');
    const headers = rows.shift().split(',');
    const data = {};
    data.ita = {}; 
    data.eng = {};
    rows.forEach((row) => {
        const obj = {};
        headers.forEach((header, index) => {
            obj[header] = row.split(',')[index];
        });
        //console.debug(obj);
        //console.debug(data);
        if (!data.ita[obj.technology]) {
            data.ita[obj.technology] = [];
            data.ita[obj.technology].push('seleziona un materiale compatibile')
        }
        if (!data.eng[obj.technology]) {
            data.eng[obj.technology] = [];
            data.eng[obj.technology].push('seleziona un materiale' + obj.materials_ita)
        }
        data.ita[obj.technology].push(obj.materials_ita);
        data.eng[obj.technology].push(obj.materials_eng);
    });
    return data;
};

fetch(basePath+'assets/tech-materials.csv')
    .then(response => response.text())
    .then(data => {
        const csv = data;
        console.debug(csv);
        // process the CSV data as needed
        csvimport = csvToObject(csv);


        let option = '';
        Object.keys(csvimport.ita).forEach((key) => {
            // console.debug(key);
            option = document.createElement('option');
            option.value = key;
            option.text = key;
            tecnologiaSelect.appendChild(option);
        });

        // console.debug('csvimport:',csvimport);
    })
    .catch(error => console.error('Error fetching the CSV file:', error));


// Get the select elements
const tecnologiaSelect = document.getElementById('tecnologia');
const materialeSelect = document.getElementById('materiale');


// Add an event listener to the tecnologia select element
tecnologiaSelect.addEventListener('change', (e) => {
    const selectedTecnologia = e.target.value;
    // Update the materiale select element based on the selected tecnologia
    updateMaterialeSelect(selectedTecnologia);
});

// Function to update the materiale select element
function updateMaterialeSelect(tech) {
    // Assuming you have an object that maps tecnologia to materiale options


    // Clear the existing options in the materiale select element
    materialeSelect.innerHTML = '';

    // Add new options to the materiale select element based on the selected tecnologia
    const materialeOptions = csvimport.ita[tech];
    if (materialeOptions) {
        materialeOptions.forEach((option) => {
            const newOption = document.createElement('option');
            newOption.value = option;
            newOption.text = option;
            materialeSelect.add(newOption);
        });
    }
}