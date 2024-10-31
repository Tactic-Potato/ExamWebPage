<?php include "includes/header.php" ?>
    <section>
        <h2>Contactanos</h2>
        <!-- imagen -->
    </section>
    <section>
        <h2>Llena el formulario de contacto</h2>
        <form action="">
            <fieldset>
                <legend>Informacion Personal</legend>
                <div>
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" placeholder="Escribe tu numbre">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Escribe tu Email">
                </div>
                <div>
                    <label for="phone">Telefono</label>
                    <input type="text" name="phone" id="phone" placeholder="555-5555-55">
                </div>
                <div>
                    <label for="msg">Mensaje</label>
                    <input name="msg" id="msg" placeholder="Escribe un mensaje">
                </div>
            </fieldset>
            <fieldset>
                <legend>Informacion sobre la propiedad.</legend>
                <div>
                    <label for="vencom">Vende o Compra</label>
                    <input type="select" name="vencom" id="vencom">
                </div>
                <div>
                    <label for="quantity">Cantidad</label>
                    <input type="number" name="quantity" id="quantity">
                </div>
            </fieldset>
            <fieldset>
                <legend>Contacto</legend>
                <div>
                    <label for="tel">Telefono</label>
                    <input type="radio" name="tel" id="tel">
                    <label for="e-mail">Email</label>
                    <input type="radio" name="e-mail" id="e-mail">
                </div>
                <div>
                    <label for="date">Fecha</label>
                    <input type="date" name="date" id="date">
                    <label for="hour">Hora</label>
                    <input type="time" name="hour" id="hour">  
                </div>
            </fieldset>
            <div>
                <button>Contactar</button>
            </div>
        </form>
    </section>
<?php include "includes/footer.php" ?>
