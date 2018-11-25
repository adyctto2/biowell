new Vue({
    el: '#exampleModalCenter1',
    data:   {
        emails : '',
        mensaje : ''
    },
    methods: {
        registrar: function(){
            var url  = 'suscripcion';
            this.mensaje = '';
            axios.post(url, {
                email : this.emails
            }).then( response =>{
                 var msj = response.data;
                if(msj == 'Suscripción correcta...'){
                    var btn = document.querySelector('#guardar');
                    $('#exampleModalCenter1').modal('hide');
                    btn.setAttribute("disabled", "");
                    toastr.success(msj);
                }
                else{
                    this.mensaje = msj;
                }
            })
        }
    }
});