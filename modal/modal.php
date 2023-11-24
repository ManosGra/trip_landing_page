<div class="contact d-flex flex-column justify-content-center align-items-center" id="modal">
    <div class="modal-inner">
        <h2 class="mb-4 f-bold text-white text-center">Contact us</h2>
        <form action="#">
            <div class="input-box">
                <div class="input-field field">
                    <p class="text-white mb-1 mt-3 f-bold">YOUR NAME*</p>
                    <input type="text" id="name" class="item w-100" autocomplete="off">
                    <div class="error-txt">Name can't be blank</div>
                </div>

                <div class="input-field field">
                    <p class="text-white mb-1 mt-4 f-bold">YOUR EMAIL*</p>
                    <input type="text" id="email" class="item w-100" autocomplete="off">
                    <div class="error-txt">Email can't be blank</div>
                </div>
            </div>

            <div class="textarea-field field">
                <p class="text-white mb-1 mt-4 f-bold">SUBJECT*</p>
                <textarea name="" id="message" class="w-100" cols="30" rows="10"></textarea>
                <div class="error-txt">Subject can't be blank</div>
            </div>

            <div class="d-flex flex-row justify-content-between align-items-center">
                <button class="button" id="closeModal">CLOSE</button>
                <button class="button" type="submit">SUBMIT</button>
            </div>
        </form>
    </div>
</div>