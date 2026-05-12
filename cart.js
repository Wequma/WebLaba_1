const { createApp } = Vue;

createApp({

    data() {
        return {

            // Кошик з LocalStorage
            cart: JSON.parse(localStorage.getItem('cart')) || [],

            // Масив турів з PHP
            tours: []

        }
    },

    // Автоматичний підрахунок TOTAL
    computed: {

        total() {

            return this.cart.reduce((sum, item) => {

                return sum + item.price * item.quantity;

            }, 0);

        }

    },

    methods: {

        // Збереження кошика
        saveCart() {

            localStorage.setItem('cart', JSON.stringify(this.cart));

        },

        // Додавання товару
        addToCart(product) {

            let existing = this.cart.find(i => i.id === product.id);

            if (existing) {

                existing.quantity++;

            } else {

                this.cart.push({

                    ...product,
                    quantity: 1

                });

            }

            this.saveCart();

            alert("Тур додано в кошик!");

        },

        // Збільшення кількості
        increase(item) {

            item.quantity++;

            this.saveCart();

        },

        // Зменшення кількості
        decrease(item) {

            if (item.quantity > 1) {

                item.quantity--;

            }

            this.saveCart();

        },

        // Видалення товару
        remove(item) {

            this.cart = this.cart.filter(i => i.id !== item.id);

            this.saveCart();

        },

        // AJAX fetch до PHP
        loadTours() {

            fetch("api.php")

            .then(response => response.json())

            .then(data => {

                this.tours = data;

                console.log("Дані отримані з PHP:", data);

            });

        }

    },

    // Автоматичний запуск fetch
    mounted() {

        this.loadTours();

    }

}).mount('#app');