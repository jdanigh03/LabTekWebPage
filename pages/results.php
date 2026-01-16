<!-- pages/results.php -->
<section id="results" class="results-section page-section">
    <div class="container">
        <div class="results-content">
            <h1>Consultar Resultados</h1>
            <p>Ingrese su código de paciente para consultar sus resultados en línea de forma segura.</p>
            
            <form action="#" method="post">
                <div class="form-group">
                    <label for="code">Código de Paciente</label>
                    <input type="text" id="code" name="code" placeholder="Ej: LAB-12345" required>
                </div>
                
                <div class="form-group">
                    <label for="cedula">Cédula de Identidad</label>
                    <input type="text" id="cedula" name="cedula" placeholder="Ej: V-12345678" required>
                </div>
                
                <button type="submit" class="btn btn-primary form-submit">
                    <i class="fas fa-search"></i> Consultar Resultados
                </button>
            </form>
        </div>
    </div>
</section>
