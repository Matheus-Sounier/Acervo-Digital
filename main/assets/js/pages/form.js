
        const imageUpload = document.getElementById('imageUpload');
        const imageInput = document.getElementById('imageInput');
        const imagePreview = document.getElementById('imagePreview');
        const previewImg = document.getElementById('previewImg');
        const removeImage = document.getElementById('removeImage');
        const myForm = document.getElementById('myForm');
        const successMessage = document.getElementById('successMessage');

        imageUpload.addEventListener('click', () => {
            imageInput.click();
        });

        imageInput.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    previewImg.src = e.target.result;
                    imagePreview.style.display = 'block';
                    imageUpload.style.display = 'none';
                };
                reader.readAsDataURL(file);
            }
        });

        removeImage.addEventListener('click', () => {
            imageInput.value = '';
            previewImg.src = '';
            imagePreview.style.display = 'none';
            imageUpload.style.display = 'block';
        });

        myForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const formData = {
                nome: document.getElementById('nome').value,
                email: document.getElementById('email').value,
                mensagem: document.getElementById('mensagem').value,
                temImagem: imageInput.files.length > 0
            };

            console.log('Dados do formulário:', formData);
            
            successMessage.style.display = 'block';
            
            setTimeout(() => {
                myForm.reset();
                imagePreview.style.display = 'none';
                imageUpload.style.display = 'block';
                successMessage.style.display = 'none';
            }, 3000);
        });