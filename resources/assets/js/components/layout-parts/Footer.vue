<template>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">&nbsp;</div>
                <div>
                    <router-link
                        active-class="active"
                        exact
                        :to="{ name: 'privacy' }"
                    >Privacy Policy</router-link>&middot;
                    <router-link
                        active-class="active"
                        exact
                        :to="{ name: 'termsconditions' }"
                    >Terms &amp; Conditions</router-link>
                </div>
            </div>
        </div>
    </footer>
</template>
<script>
export default {
    name: "Footer",
};
</script>
