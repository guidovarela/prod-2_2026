        // al click del switch, cambiar el color-scheme del body
        document.getElementById('validationCustomSwitch').addEventListener('change', function() {
            if (this.checked) {
                document.body.classList.remove('color-scheme-light');
                document.body.classList.add('color-scheme-dark');
                document.getElementById('validationCustomSwitchLabel').innerText = 'Modo Claro';

            } else {
                document.body.classList.remove('color-scheme-dark');
                document.body.classList.add('color-scheme-light');
                document.getElementById('validationCustomSwitchLabel').innerText = 'Modo Oscuro';
            }
        });
