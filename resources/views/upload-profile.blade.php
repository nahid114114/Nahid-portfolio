<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Profile Picture</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Upload Your Profile Picture</h1>
        
        <form id="uploadForm" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Select Image (JPG or PNG)</label>
                <input type="file" name="profile_image" id="profile_image" accept="image/jpeg,image/png,image/jpg" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" required>
            </div>
            
            <div id="preview" class="hidden">
                <label class="block text-sm font-medium text-gray-700 mb-2">Preview:</label>
                <img id="previewImg" src="" alt="Preview" class="w-48 h-48 rounded-full object-cover border-4 border-blue-600">
            </div>
            
            <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition">
                Upload Profile Picture
            </button>
        </form>
        
        <div id="message" class="mt-4 hidden"></div>
        
        <div class="mt-8 p-4 bg-blue-50 rounded-lg">
            <p class="text-sm text-gray-700">
                <strong>Note:</strong> After uploading, the image will be saved as <code class="bg-white px-2 py-1 rounded">profile.jpg</code> or <code class="bg-white px-2 py-1 rounded">profile.png</code> in the <code class="bg-white px-2 py-1 rounded">public/images/</code> folder.
            </p>
        </div>
        
        <div class="mt-4">
            <a href="/" class="text-blue-600 hover:underline">← Back to Portfolio</a>
        </div>
    </div>

    <script>
        const form = document.getElementById('uploadForm');
        const fileInput = document.getElementById('profile_image');
        const preview = document.getElementById('preview');
        const previewImg = document.getElementById('previewImg');
        const message = document.getElementById('message');

        fileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    preview.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }
        });

        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const formData = new FormData();
            formData.append('profile_image', fileInput.files[0]);
            formData.append('_token', '{{ csrf_token() }}');

            try {
                const response = await fetch('/upload-profile', {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();
                
                message.classList.remove('hidden');
                if (response.ok) {
                    message.className = 'mt-4 p-4 bg-green-100 text-green-800 rounded-lg';
                    message.textContent = '✅ Profile picture uploaded successfully! Go back to your portfolio to see it.';
                } else {
                    message.className = 'mt-4 p-4 bg-red-100 text-red-800 rounded-lg';
                    message.textContent = '❌ Error: ' + (result.message || 'Failed to upload');
                }
            } catch (error) {
                message.classList.remove('hidden');
                message.className = 'mt-4 p-4 bg-red-100 text-red-800 rounded-lg';
                message.textContent = '❌ Error: ' + error.message;
            }
        });
    </script>
</body>
</html>

