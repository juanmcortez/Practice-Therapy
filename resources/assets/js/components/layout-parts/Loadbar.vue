<template>
    <div class="progress bg-dark shadow-none" style="height: 3px;">
        <div
            class="progress-bar bg-danger"
            role="progressbar"
            :aria-valuenow="percentage"
            :aria-valuemin="minval"
            :aria-valuemax="maxval"
            :style="'width: '+percentage+'%;'"
        ></div>
    </div>
</template>
<script>
export default {
    name: "Loadbar",
    props: {
        percentage: Number,
    },
    data() {
        return {
            maxval: 100,
            minval: 0,
        };
    },
};
</script>
