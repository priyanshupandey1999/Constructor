document.querySelectorAll('.draggable').forEach(item => {
    item.addEventListener('dragstart', event => {
      event.dataTransfer.setData('text/plain', getComputedStyle(item).backgroundImage)
    })
  })
  
  document.querySelectorAll('.droptarget').forEach(item => {
    item.addEventListener('dragover', event => {
      event.preventDefault()
    })
    item.addEventListener('dragleave', event => {
      item.classList.remove('hover')
    })
    item.addEventListener('dragenter', event => {
      item.classList.add('hover')
    })
    
    item.addEventListener('drop', event => {
      item.style.backgroundImage = event.dataTransfer.getData('text/plain')
    })
  })


  Dropzone.options.myAwesomeDropzone = {
    paramName: "file", // The name that will be used to transfer the file
    maxFilesize: 10, // MB
    maxFiles :1, //maxfiles to be uploaded
    acceptedFiles: ".jpeg,.jpg,.png,.gif", //allow file type

    autoProcessQueue: false,            // Prevents Dropzone from uploading dropped file immediately


    init: function() {
        var confirmButton = document.querySelector("#confirm-all");
        var cancelButton = document.querySelector("#cancel-all");

        myDropzone = this; // closure

        //if user click Confirm
        confirmButton.addEventListener("click", function() {
            document.getElementsByClassName("dz-progress")[0].style.display = "block"; //show progress bar
            myDropzone.processQueue(); // Tell Dropzone to process the queued file.

            //hide buttons again
            document.getElementById("upload-confirmation").style.display = "none";

        });

        //if user click Cancel
        cancelButton.addEventListener("click", function() {
            myDropzone.removeAllFiles(true);// Tell Dropzone to cancel the queued file.

            //hide button again
            document.getElementById("upload-confirmation").style.display = "none";
        });


        // You might want to show the submit button only when
        // files are dropped here:
        this.on("addedfile", function() {
            // Show confirm or cancel button
            document.getElementById("upload-confirmation").style.display = "block";

            //hide progress bar temporarily
            document.getElementsByClassName("dz-progress")[0].style.display = "none";
        });

    }
};

