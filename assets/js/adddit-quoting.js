var ENV = window.location.host;
var basePath = '/cfa/';
if (ENV == 'localhost' || ENV == 'meuro.dev') {
    basePath = '/ADDDIT/';
}
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