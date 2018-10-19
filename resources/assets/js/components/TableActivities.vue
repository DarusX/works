<template>
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>Actividad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(activity, index) in activities">
                    <td class="py-1">{{activity.activity}}</td>
                    <td class="py-1">
                        <button @click="destroy(index)" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                        <a :href="'/activities/'+activity.id+'/edit'" class="btn btn-sm btn-light"><i class="fas fa-pen"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    export default {
        props: ["data"],
        data() {
            return {
                activities: this.data
            }
        },
        created() {
            console.log(this.activities)
        },
        methods: {
            destroy: function(index) {
                jQuery.ajax({
                    headers: {
                        "X-CSRF-TOKEN": "PzE4QfNa0LLOpVLWHFbNOsLHfA2Nf5pwIvYRXrt5"
                    },
                    url: "/activities/" + this.activities[index].id,
                    method: "DELETE",
                    success: (data) => {
                        this.activities.splice(index, 1)
                    }
                })
            }
        },
        
    }
</script>