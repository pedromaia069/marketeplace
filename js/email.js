(function($){
        
        function alertar(tipo, texto){
            var alert = $('<div>').addClass('alert alert-dimissible').addClass('alert-'+tipo).text(texto);
            var btn = $('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
            alert.append(btn);
            return alert;
        }
        
        $('#frm-contato').on('submit', function(e){
            e.preventDefault();
            var $this = $(this);
            var alert = alertar('success', 'E-mail enviado com sucesso!');
            
            var form_valid = true; 
            
            $this.find('input, textarea').each(function(input){
                if ($(this).val() == '')
                    form_valid = false;
            });
            
            $('#btn-contato').button('loading');         
            
            if (!form_valid){
                var alert = alertar('warning', 'Informe todos os dados!');
                $this.prepend(alert);
                $('#btn-contato').button('reset');
                return;
            }
            
            $.post('/index.php', $this.serializeArray())
            .fail(function(){
                $('#btn-contato').button('reset');
            })
            .done(function(response){
                $this.prepend(alert);
                $this.find('input, textarea').val('');
                $('#btn-contato').button('reset');
            })
        })
    })(jQuery)