import 'preline';
import Clipboard from 'clipboard';
import 'flowbite';
// import 'preline/dist/preline';
// import { HSSelect } from 'preline';
import { initFlowbite } from 'flowbite';
import jQuery from 'jquery';
window.$ = jQuery;


document.addEventListener('livewire:navigated', () => {
  initFlowbite();
  window.HSStaticMethods.autoInit();
  HSSelect.autoInit();
  clipboard();
});


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

    fileInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                profileImage.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
});

document.addEventListener('livewire:navigated', function () {
  Livewire.on('tab-change', tab => {
      document.querySelectorAll('[data-tabs-toggle] [role="tab"]').forEach(tabElement => {
          if (tabElement.dataset.tabsTarget === `#${tab}`) {
              tabElement.classList.add('text-white', 'bg-blue');
              tabElement.classList.remove('hover:text-sky', 'hover:bg-white', 'hover:border-none');
          } else {
              tabElement.classList.remove('text-white', 'bg-blue');
              tabElement.classList.add('hover:text-sky', 'hover:bg-white', 'hover:border-none');
          }
      });
  });
});
