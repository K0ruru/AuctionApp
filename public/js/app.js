const addProductBtn = document.getElementById('add-product-btn');
  const popupForm = document.getElementById('popup-form');
  const closeBtn = document.getElementById('close-btn');

  addProductBtn.addEventListener('click', () => {
    popupForm.classList.remove('hidden');
  });

  closeBtn.addEventListener('click', () => {
    popupForm.classList.add('hidden');
  });


