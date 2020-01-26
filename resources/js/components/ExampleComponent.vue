<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            function joinToOnline() {
                Echo.join('online')
                .here(users => console.log(users))
                .joining(user => alert(`${user.name} Online now!`))
                .leaving(user => alert(`${user.name} left chat`));
            }
            try {
                joinToOnline();
            } catch (err) {
                console.log(err);
            }

        }
    }
</script>
