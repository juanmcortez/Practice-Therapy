<template>
    <div class="content">
        <p>&nbsp;</p>
        <div class="row mb-4">
            <div class="col-12 mb-4 col-lg-4 mb-lg-0">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-chart-bar mr-1"></i> Bar Chart Example
                    </div>
                    <div class="card-body">
                        <canvas id="myBarChart" width="100%" height="250"></canvas>
                    </div>
                    <div
                        class="card-footer small text-muted text-right"
                    >Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <div class="col-12 mb-4 col-lg-4 mb-lg-0">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-chart-bar mr-1"></i> Bar Chart Example
                    </div>
                    <div class="card-body">
                        <canvas id="myBarChart" width="100%" height="250"></canvas>
                    </div>
                    <div
                        class="card-footer small text-muted text-right"
                    >Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-chart-bar mr-1"></i> Bar Chart Example
                    </div>
                    <div class="card-body">
                        <canvas id="myBarChart" width="100%" height="250"></canvas>
                    </div>
                    <div
                        class="card-footer small text-muted text-right"
                    >Updated yesterday at 11:59 PM</div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 mb-4 col-lg-4 mb-lg-0">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-chart-bar mr-1"></i> Bar Chart Example
                    </div>
                    <div class="card-body">
                        <canvas id="myBarChart" width="100%" height="250"></canvas>
                    </div>
                    <div
                        class="card-footer small text-muted text-right"
                    >Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-chart-bar mr-1"></i> Bar Chart Example
                    </div>
                    <div class="card-body">
                        <canvas id="myBarChart" width="100%" height="250"></canvas>
                    </div>
                    <div
                        class="card-footer small text-muted text-right"
                    >Updated yesterday at 11:59 PM</div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 mb-4 col-lg-8 mb-lg-0">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-chart-bar mr-1"></i> Bar Chart Example
                    </div>
                    <div class="card-body">
                        <canvas id="myBarChart" width="100%" height="250"></canvas>
                    </div>
                    <div
                        class="card-footer small text-muted text-right"
                    >Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-chart-bar mr-1"></i> Bar Chart Example
                    </div>
                    <div class="card-body">
                        <canvas id="myBarChart" width="100%" height="250"></canvas>
                    </div>
                    <div
                        class="card-footer small text-muted text-right"
                    >Updated yesterday at 11:59 PM</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "",
    data() {
        return {
            pageTitle: "",
        };
    },
    beforeMount() {
        this.pageTitle = this.$route.meta.title;
        this.name = this.$route.name;
    },
    mounted() {
        /*axios.get("/api/products").then((response) => {
            this.products = response.data.data;
        });*/
    },
};
</script>
