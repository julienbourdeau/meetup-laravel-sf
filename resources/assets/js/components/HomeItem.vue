<template>

<div class="hit col-sm-3">
    <div class="pictures-wrapper">
        <img class="picture" :src="home.urls.picture_url">
        <img class="profile" :src="home.user.thumbnail_url">
    </div>

    <div class="infos">
        <h4 class="media-heading">
            <ais-highlight :result="home" attribute-name="name"></ais-highlight>
        </h4>
        <p>{{ home.room_type }} - <ais-highlight :result="home" attribute-name="city"></ais-highlight>, <ais-highlight :result="home" attribute-name="country"></ais-highlight></p>
    </div>
</div>

</template>

<script>
    export default {
        props: ['home']
    }
</script>
