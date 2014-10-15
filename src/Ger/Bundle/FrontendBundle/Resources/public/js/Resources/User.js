tFactori.provider("User", function() {
    this.$get = function() {
        return {
            username: "",
            password: "",
            roles: [],
            isAuthenticated: false
        }
    }
});