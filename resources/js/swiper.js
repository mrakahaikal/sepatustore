import Swiper from 'swiper';
import 'swiper/css';

let swiperInstance = null;

function initializeSwiper() {
    const swiperElement = document.querySelector('.swiper');
    const brandSwiper = document.querySelector('.swiper-brand');
    if (!swiperElement) return;
    if (!brandSwiper) return;

    if (swiperInstance) {
        swiperInstance.destroy();
        swiperInstance = null;
    }

    swiperInstance = new Swiper(swiperElement, {
        // Konfigurasi Swiper Anda
        slidesOffsetAfter: 16,
        slidesOffsetBefore: 16,
        slidesPerView: "auto",
        spaceBetween: 16,
        centerInsufficientSlides: true
    });
    swiperInstance = new Swiper(brandSwiper, {
        // Konfigurasi Swiper Anda
        slidesPerView: 3,
        spaceBetween: 16,
        centerInsufficientSlides: true
    });
}

document.addEventListener('DOMContentLoaded', initializeSwiper);

document.addEventListener('livewire:navigated', initializeSwiper);

document.addEventListener('livewire:updated', initializeSwiper);
const swiperProduct = document.querySelectorAll(".swiper-product")
