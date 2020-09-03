<template>
    <div
        aria-live="polite"
        aria-atomic="true"
        class="d-flex justify-content-end align-items-start"
        style="height: 0"
    >
        <div
            class="toast mt-4"
            role="alert"
            aria-live="assertive"
            aria-atomic="true"
            :style="'z-index: 999999; opacity: '+pOpacity+'; background-color: rgba(255, 255, 255, 0.65)'"
        >
            <div :class="'toast-header bg-gradient-'+popType">
                <!-- <img src="..." class="rounded mr-2" alt="..." /> -->
                <strong class="mr-auto text-uppercase text-white" v-html="popName"></strong>
                <!-- <small class="text-muted" v-html="timeAgo"></small> -->
                <button
                    type="button"
                    class="ml-2 mb-1 close"
                    data-dismiss="toast"
                    aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body" v-html="popMessage"></div>
        </div>
    </div>
</template>
<script>
export default {
    name: "Toast",
    props: {
        popName: { type: String, default: "Info" },
        popType: { type: String, default: "info" },
        popMessage: {
            type: String,
            default: "Example message to include in the alert.",
        },
        timeAgo: { type: String, default: "just now" },
        pOpacity: { type: Number, default: 0 },
    },
    methods: {
        turnOn() {
            pOpacity = 1;
        },
    },
};
</script>
