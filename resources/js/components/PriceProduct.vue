<template>
    <span class="span_price">350 ₽</span>
</template>

<script>
    export default {
        created() {

        },
        mounted() {
          //  console.log('Gromov')
        }
    }

    let input =  document.querySelector('.card-body');
    input.addEventListener('change', function () { // обработчик событий на сортировку таблицы
        let check = Event.target;
        console.log(check);
    });

    console.log('input')
</script>
