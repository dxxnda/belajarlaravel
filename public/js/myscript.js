$(".owl-carousel.banner").owlCarousel({
    loop: true,
    margin: 10,
    dots: true,
    autopalyTimeout:2000,
    autoplaySpeed: 1000,
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

$(".owl-carousel.promohariini").owlCarousel({
    loop: true,
    margin: 10,
    dots: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 3
        }
    }
});

$(".owl-carousel.promo").owlCarousel({
    loop: true,
    margin: 10,
    dots: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
});

$(".owl-carousel.detailsproduct").owlCarousel({
    loop: true,
    margin: 10,
    dots: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 3
        }
    }
});

