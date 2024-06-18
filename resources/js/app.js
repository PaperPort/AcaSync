import Clipboard from 'clipboard';
import 'flowbite';
import { initFlowbite } from 'flowbite';
import jQuery from 'jquery';
window.$ = jQuery;

document.addEventListener('livewire:navigated', () => {
  initFlowbite();
  clipboard();
})

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
document.addEventListener('livewire:navigated', () => {
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

function clipboard (){
  const clipboard = FlowbiteInstances.getInstance('CopyClipboard', 'copy-button');
  const $defaultMessage = document.getElementById('default-message');
  const $successMessage = document.getElementById('success-message');

  clipboard.updateOnCopyCallback((clipboard) => {
      $defaultMessage.classList.add('hidden');
      $successMessage.classList.remove('hidden');

      // reset to default state
      setTimeout(() => {
          $defaultMessage.classList.remove('hidden');
          $successMessage.classList.add('hidden');
      }, 2000);
  })
}

document.addEventListener('livewire:navigated', () => {
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

document.addEventListener('livewire:navigated', function () {
  const textarea = document.getElementById('tags');
  const tagContainer = document.getElementById('tag-textarea');

  textarea.addEventListener('keydown', function (event) {
      if (event.key === 'Enter') {
          event.preventDefault();
          const value = textarea.value.trim();
          if (value) {
              addTag(value);
              textarea.value = '';
          }
      }
  });

  function addTag(value) {
      const tag = document.createElement('span');
      tag.className = 'flex items-center text-sm font-medium text-gray-700 bg-gray-200 rounded-md px-2 py-1 m-1';
      tag.textContent = value;

      const closeButton = document.createElement('button');
      closeButton.className = 'ml-2 text-gray-500 hover:text-gray-700';
      closeButton.innerHTML = '&times;';
      closeButton.addEventListener('click', function () {
          tagContainer.removeChild(tag);
      });

      tag.appendChild(closeButton);
      tagContainer.appendChild(tag);
  }
});
