Dropzone.options.fileDropzone = {
    url: "{{ route('suggestions.store') }}",
    paramName: "file",
    maxFilesize: 2, // Tamaño máximo del archivo en MB
    acceptedFiles: ".png, .jpg, .jpeg, .pdf, .txt", 
    dictDefaultMessage: "Arrastra y suelta archivos aquí o haz clic para seleccionar archivos",
    dictFallbackMessage: "Tu navegador no soporta arrastrar y soltar para subir archivos.",
    dictFileTooBig: "El archivo es demasiado grande ({{filesize}} MB). Tamaño máximo permitido: {{maxFilesize}} MB.",
    dictInvalidFileType: "No puedes subir archivos de este tipo.",
    dictResponseError: "El servidor respondió con código {{statusCode}}.",
    dictCancelUpload: "Cancelar subida",
    dictUploadCanceled: "La subida ha sido cancelada.",
    dictCancelUploadConfirmation: "¿Estás seguro de que quieres cancelar esta subida?",
    dictRemoveFile: "Eliminar archivo",
    dictMaxFilesExceeded: "Ya has subido el máximo de archivos permitidos.",
    addRemoveLinks: true, // Mostrar enlaces para eliminar archivos
    init: function () {
        this.on("success", function (file, response) {
            // Manejar la respuesta del servidor después de cargar el archivo
        });
    }
};
