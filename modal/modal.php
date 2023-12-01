<div class="contact d-flex flex-column justify-content-center align-items-center" id="modal">
    <div class="modal-inner">
        <h2 class="mb-4 f-bold text-white text-center">Contact us</h2>
        <form action="#">
            <div class="input-box">
                <div class="input-field field">
                    <p class="text-white mb-1 mt-3 f-bold">YOUR NAME*</p>
                    <input type="text" id="name" class="item w-100" autocomplete="off">
                    <div class="error-txt f-bold mt-1">Name can't be blank</div>
                </div>

                <div class="input-field field">
                    <p class="text-white mb-1 mt-4 f-bold">YOUR EMAIL*</p>
                    <input type="text" id="email" class="item w-100" autocomplete="off">
                    <div class="error-txt email f-bold mt-1">Email can't be blank</div>
                </div>
            </div>

            <div class="textarea-field field">
                <p class="text-white mb-1 mt-4 f-bold">SUBJECT*</p>
                <textarea name="" id="message" class="w-100 item" cols="30" rows="10"></textarea>
                <div class="error-txt f-bold">Subject can't be blank</div>
            </div>

            <div class="input-field field">
                <input type="checkbox" id="myCheckbox" autocomplete="off">
                <label for="myCheckbox" class="item checkbox"> By clicking this, you accept the <a href="privacy.php">privacy
                        policy*</a></label>
                <div class="danger-txt f-bold">You must accept the privacy policy</div>
            </div>

            <div class="d-flex flex-row justify-content-between align-items-center">
                <a href="#" class="f-bold text-decoration-none button" id="closeModal">CLOSE</a>
                <button class="f-bold button" type="submit">SEND MESSAGE</button>
            </div>
        </form>
    </div>
</div>