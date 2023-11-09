var canAddFields = true;

function createDocumentUploadField() {
    if (!canAddFields) {
        event.preventDefault();
        return;
    }
    event.preventDefault();
    const container = $("#container2");
    const newField = $("<div>").addClass("field");
    newField.html(`
                            <input type="text" name="document_names[]" placeholder="Enter document title">
                            <input type="file" class="form-control" name="document_files[]" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, text/plain, application/pdf, image/*">
                            
                            <div class="error-message"></div> 
                            <button type="button" class="remove-field sign"
                                style="border: none;color: rgb(90, 88, 214);padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 10px;cursor: pointer;"
                            ><i class="fas fa-minus"></i></button>
                            <br><p class="file-info"></p>
                        `);
    container.append(newField);

    const fileInput = newField.find('input[type="file"]');
    const fileInfo = newField.find(".file-info");
    const errorMessage = newField.find(".error-message");

    // Attach the event listener for removing the field
    const removeButton = newField.find(".remove-field");
    removeButton.click(function () {
        newField.remove();
    });

    // Function to update file information and validate file size and type
    function updateFileInfo() {
        const file = fileInput[0].files[0];
        if (file) {
            const maxFileSizeInBytes = 10 * 1024 * 1024; // 10 MB (adjust as needed)
            const allowedFileTypes = ["application/msword", "application/vnd.ms-excel", "application/vnd.ms-powerpoint", "text/plain", "application/pdf", "image/jpeg", "image/png", "image/gif"]; // Add more allowed types as needed

            if (file.size > maxFileSizeInBytes) {
                errorMessage.text("File size exceeds the maximum allowed.");
                fileInput.val(""); // Clear the file input
                fileInfo.text("");
            } else if (!allowedFileTypes.includes(file.type)) {
                errorMessage.text("Invalid file type. Allowed types: doc, xls, ppt, txt, pdf, jpg, png, gif");
                fileInput.val(""); // Clear the file input
                fileInfo.text("");
            } else {
                errorMessage.text("");
                let fileSize = file.size;
                let fileSizeStr = "";

                if (fileSize < 1024) {
                    fileSizeStr = fileSize + " bytes";
                } else if (fileSize < 1048576) { // 1 MB = 1024 KB
                    fileSizeStr = (fileSize / 1024).toFixed(2) + " KB";
                } else if (fileSize < 1073741824) { // 1 GB = 1024 MB
                    fileSizeStr = (fileSize / 1048576).toFixed(2) + " MB";
                } else { // Larger than 1 GB
                    fileSizeStr = (fileSize / 1073741824).toFixed(2) + " GB";
                }

                const fileType = file.type;
                fileInfo.text(`File Size: ${fileSizeStr} | File Type: ${fileType}`);
            }
        } else {
            errorMessage.text("");
            fileInfo.text("");
        }
    }

    // Attach event listener for file input change
    fileInput.change(updateFileInfo);

    updateFileInfo(); // Initial update
}


// end

//  container3 vocab PDF
function createVocabUploadField() {
    if (!canAddFields) {
        event.preventDefault();
        return;
    }
    event.preventDefault();
    const container = $("#container3");
    const newFields = $("<div>").addClass("field");
    newFields.html(`
                            <input type="text" name="vocab_names[]" placeholder="Enter vocabulary file title">
                            <input type="file" class="form-control" name="vocab_files[]" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, text/plain, application/pdf, image/*">
                            
                            <div class="error-message"></div> 
                            <button type="button" class="remove-field sign"
                                style="border: none;color: rgb(90, 88, 214);padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 10px;cursor: pointer;"
                            ><i class="fas fa-minus"></i></button>
                            <div class="row"><div class="col"><p class="file-info"></p></div></div>
                            
                        `);
    container.append(newFields);

    const fileInput = newFields.find('input[type="file"]');
    const fileInfo = newFields.find(".file-info");
    const errorMessage = newFields.find(".error-message");

    // Attach the event listener for removing the field
    const removeButton = newFields.find(".remove-field");
    removeButton.click(function () {
        newFields.remove();
    });

    // Function to update file information and validate file size and type
    function updateFileInfo() {
        const file = fileInput[0].files[0];
        if (file) {
            const maxFileSizeInBytes = 10 * 1024 * 1024; // 10 MB (adjust as needed)
            const allowedFileTypes = ["application/msword", "application/vnd.ms-excel", "application/vnd.ms-powerpoint", "text/plain", "application/pdf", "image/jpeg", "image/png", "image/gif"]; // Add more allowed types as needed

            if (file.size > maxFileSizeInBytes) {
                errorMessage.text("File size exceeds the maximum allowed.");
                fileInput.val(""); // Clear the file input
                fileInfo.text("");
            } else if (!allowedFileTypes.includes(file.type)) {
                errorMessage.text("Invalid file type. Allowed types: doc, xls, ppt, txt, pdf, jpg, png, gif");
                fileInput.val(""); // Clear the file input
                fileInfo.text("");
            } else {
                errorMessage.text("");
                let fileSize = file.size;
                let fileSizeStr = "";

                if (fileSize < 1024) {
                    fileSizeStr = fileSize + " bytes";
                } else if (fileSize < 1048576) { // 1 MB = 1024 KB
                    fileSizeStr = (fileSize / 1024).toFixed(2) + " KB";
                } else if (fileSize < 1073741824) { // 1 GB = 1024 MB
                    fileSizeStr = (fileSize / 1048576).toFixed(2) + " MB";
                } else { // Larger than 1 GB
                    fileSizeStr = (fileSize / 1073741824).toFixed(2) + " GB";
                }

                const fileType = file.type;
                fileInfo.text(`File Size: ${fileSizeStr} | File Type: ${fileType}`);
            }
        } else {
            errorMessage.text("");
            fileInfo.text("");
        }
    }

    // Attach event listener for file input change
    fileInput.change(updateFileInfo);

    updateFileInfo(); // Initial update
}

// end

// Function to create a new file upload field
function createFileUploadField() {
    if (!canAddFields) {
        event.preventDefault();
        return;
    }
    event.preventDefault();
    const container = $("#container");
    const newField = $("<div>").addClass("field");
    newField.html(`
            <input type="text" name="video_titles[]" placeholder="Enter video title">
            <input type="file" class="form-control" name="videos[]" accept="image/*,video/*">
            <p class="file-info"></p>
            
            <button type="button" class="remove-field sign"
            style="border: none;color: rgb(90, 88, 214);padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 10px;cursor: pointer;"
            ><i class="fas fa-minus"></i></button>
            `);
    container.append(newField);

    const fileInput = newField.find('input[type="file"]');
    const fileInfo = newField.find(".file-info");

    // Attach the event listener for removing the field
    const removeButton = newField.find(".remove-field");
    removeButton.click(function () {
        newField.remove();
    });

    // Function to update file information
    function updateFileInfo() {
        const file = fileInput[0].files[0];
        if (file) {
            const fileSize = (file.size / 1024).toFixed(2); // Convert to KB
            const fileType = file.type;
            fileInfo.text(`File Size: ${fileSize} KB | File Type: ${fileType}`);
        } else {
            fileInfo.text("");
        }
    }

    // Attach event listener for file input change
    fileInput.change(updateFileInfo);

    updateFileInfo(); // Initial update
}

// Attach the event listener for adding new fields only if canAddFields is true
const addButton = $("#add-field");
addButton.click(createFileUploadField);

// Add vocab field
const addsButton = $("#add-vocab-field");
addsButton.click(createVocabUploadField);

// for documents
const addedButton = $("#add-document-field");
addedButton.click(createDocumentUploadField);