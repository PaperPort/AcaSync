import Clipboard from 'clipboard';
import 'flowbite';

// intersect animation
document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('[intersect]');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
            const animationClasses = entry.target.getAttribute('intersect').split(' ').map(cls => `${cls}`).join(' ');
            entry.target.classList.add(...animationClasses.split(' '));
            entry.target.classList.remove('opacity-0');
            observer.unobserve(entry.target);
        }
      });
    });

    elements.forEach(element => {
      observer.observe(element);
    });
  });

// clipboard
document.addEventListener('DOMContentLoaded', () => {
  const clipboard = new Clipboard('.btn');
  const button = document.getElementById('copy-button');
  const tooltip = document.getElementById('tooltip');

  clipboard.on('success', () => {
      tooltip.classList.remove('hidden');
      setTimeout(() => {
          tooltip.classList.add('hidden');
      }, 3000);
  });

  clipboard.on('error', (e) => {
      console.error('Failed to copy text: ', e);
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const editButton = document.getElementById('editButton');
  const fileInput = document.getElementById('fileInput');
  const profileImage = document.getElementById('profileImage');

  editButton.addEventListener('click', () => {
      fileInput.click();
  });

  fileInput.addEventListener('change', (event) => {
      const file = event.target.files[0];
      if (file) {
          const reader = new FileReader();
          reader.onload = (e) => {
              profileImage.src = e.target.result;
          };
          reader.readAsDataURL(file);
      }
  });
});
