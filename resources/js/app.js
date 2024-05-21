import 'flowbite';

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