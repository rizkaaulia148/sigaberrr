<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Viewer</title>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <style>
        #pdf-viewer {
            width: 100%;
            height: 80vh;
        }
    </style>
</head>

<body>
    <div id="pdf-viewer"></div>

    <script>
        // Assuming the PDF data is stored in a variable named '$FILE'
        const pdfData = <?php echo json_encode($FILE); ?>;

        // Create a new PDF document
        pdfjsLib.getDocument({ data: pdfData }).promise.then(function (pdf) {
            // Get the first page
            pdf.getPage(1).then(function (page) {
                const scale = 1.5;
                const viewport = page.getViewport({ scale: scale });

                // Create a canvas element to display the PDF
                const canvas = document.createElement('canvas');
                const context = canvas.getContext('2d');
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                // Render the PDF page on the canvas
                const renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };
                page.render(renderContext);

                // Append the canvas to the PDF viewer element
                const pdfViewer = document.getElementById('pdf-viewer');
                pdfViewer.appendChild(canvas);
            });
        }).catch(function (error) {
            console.error('Error rendering PDF:', error);
        });
    </script>
</body>

</html>