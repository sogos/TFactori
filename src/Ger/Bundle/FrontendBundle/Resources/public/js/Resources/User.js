tFactori.provider("User", function() {
    this.$get = function() {
        return {
            username: "",
            password: "",
            isAuthenticated: false
        }
    }
});