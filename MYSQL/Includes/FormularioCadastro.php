 <div class="Resultado"></div>

    <div class="Formulario">
        <h1 class="Center">Cadastro</h1>

        <form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/ControllerCadastro.php">
            <div class="FormularioInput">
                Nome Completo: <br>
                <input type="text" id="Nome" name="Nome">
            </div>

            <div class="FormularioInput">
                Sexo: <br>
                <select name="Sexo" id="Sexo">
                    <option value="">Selecione</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outros">Outros</option>
                </select>
            </div>

            <div class="FormularioInput ">
                Cidade: <br>
                <input type="text" id="Cidade" name="Cidade">
            </div>

        
            <div class="FormularioInput FormularioInput100 Center">
                <input type="submit" value="Cadastrar">
            </div>
        </form>

    </div>
