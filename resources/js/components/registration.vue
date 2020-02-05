<template>
    <div class="container">
        <form @submit.prevent="submitForm">
            <div class="mt-5 pt-3">

            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Full Name</label>
                <input type="text"
                       class="form-control"
                       id="formGroupExampleInput"
                       name="full_name"
                       v-model="users.full_name"
                       placeholder="Dilshan Subhashana Rajapaksha">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">NIC Number</label>
                <input type="text"
                       class="form-control"
                       id="formGroupExampleInput2"
                       name="nic_number"
                       v-model="users.nic_number"
                       placeholder="943482381v">
            </div>

            <div class="row">
                <div class="col form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control"
                            id="exampleFormControlSelect1"
                            name="occupation"
                            v-model="users.occupation">
                        <option disabled value="">Please select one</option>
                        <option>Admin</option>
                        <option>User</option>
                    </select>
                </div>
                <div class="col form-group">
                    <label for="formGroupExampleInput4">Telephone</label>
                    <input type="number"
                           class="form-control"
                           id="formGroupExampleInput4"
                           name="telephone"
                           v-model="users.telephone"
                           placeholder="0778152905">
                </div>
            </div>




            <div class="form-group">
                <label for="formGroupExampleInput5">Email</label>
                <input type="email"
                       class="form-control"
                       id="formGroupExampleInput5"
                       name="email"
                       v-model="users.email"
                       placeholder="dilshan@enfection.com">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput6">Password</label>
                <input type="password"
                       class="form-control"
                       id="formGroupExampleInput6"
                       name="password"
                       v-model="users.password"
                       placeholder="Dilshan_123">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>

        <div v-if="error" class="alert alert-warning mt-3" role="alert">
            {{ message }}
        </div>

    </div>
</template>

<style>

</style>

<script>
    export default {
        data() {
            return {
                users: {
                    full_name: '',
                    nic_number: '',
                    occupation: '',
                    telephone: '',
                    email: '',
                    password: ''
                },
                error: false,
                message : ''
            }
        },
        methods: {
            submitForm() {

                this.$http.post("/api/saveuser", this.users)
                    .then(function (response) {
                        if (response.data.success) {
                            alert("successful !");
                        } else {
                            this.error = true;
                            this.message = response.data.data;
                        }
                    });
            }
        }
    }
</script>
