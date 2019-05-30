<div class="container register-form">
        <div class="form">
            <div class="note">
                <p>Register here</p>
            </div>

            <div class="form-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="user-name" placeholder="Username*" name="password" required />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="psw" placeholder="Password*" minlength="8" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="psw2" placeholder="Retype password*" value="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="f-name" placeholder="First name*" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="l-name" placeholder="Last name" value="" />
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="sel1">
                                <option value="" disabled selected>Select country*</option>
                                <option selected>Latvia</option>
                                <option>Estonia</option>
                                <option>Lithuania</option>
                                <option>Sweden</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="button" class="btnSubmit" id="submit-btn">Submit</button>
            </div>
        </div>
    </div>