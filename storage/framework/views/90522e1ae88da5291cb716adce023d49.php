<!-- resources/views/tour.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Tour</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/three@0.124.0/build/three.min.js"></script>
    <script src="<?php echo e(asset('javascript/panolens.min.js')); ?>"></script>

    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

    <div class="container my-4">
        <h2 class="text-center">Explore the Virtual Tour</h2>
    </div>
    <div id="tour-container" style="width: 100%; height: 500px;"></div>

    <script>
        // Initialize Panolens viewer for the virtual tour
        const panorama = new PANOLENS.ImagePanorama('/images/PANO_20241204_120158_1.jpg'); // Update with actual image path
        const viewer = new PANOLENS.Viewer({
            container: document.querySelector('#tour-container'),
            autoRotate: true, // Slowly rotates the view
            autoRotateSpeed: 0.5,
            controlBar: true // Adds controls to navigate the view
        });
        viewer.add(panorama);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\wamp64\www\Windo\resources\views/tour.blade.php ENDPATH**/ ?>