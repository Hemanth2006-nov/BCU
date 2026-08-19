<?php 
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-navy text-white text-center py-3">
                    <h4 class="mb-0 fw-bold">SIGN UP</h4>
                </div>
                <div class="card-body p-4">
                    <form action="signup.php" method="POST" id="signupForm">
                        
                        <div class="row mb-3 align-items-center">
                            <label class="col-md-3 form-label fw-bold">Name :</label>
                            <div class="col-md-9">
                                <input type="text" name="fullname" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <label class="col-md-3 form-label fw-bold">DOB :</label>
                            <div class="col-md-9">
                                <input type="date" name="dob" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <label class="col-md-3 form-label fw-bold">Gender :</label>
                            <div class="col-md-9 d-flex gap-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="other" value="Other">
                                    <label class="form-check-label" for="other">Other</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <label class="col-md-3 form-label fw-bold">Mobile Number :</label>
                            <div class="col-md-9">
                                <input type="tel" name="mobile" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <label class="col-md-3 form-label fw-bold">Email :</label>
                            <div class="col-md-9">
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3 form-label fw-bold">Address :</label>
                            <div class="col-md-9">
                                <textarea name="address" class="form-control" rows="3" required></textarea>
                            </div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <label class="col-md-3 form-label fw-bold">Profession :</label>
                            <div class="col-md-9">
                                <select name="profession" class="form-select" required>
                                    <option value="">Select Profession</option>
                                    <option value="Student">Student</option>
                                    <option value="Teacher">Teacher / Faculty</option>
                                    <option value="Staff">University Staff</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <label class="col-md-3 form-label fw-bold">College :</label>
                            <div class="col-md-9">
                                <select name="college" class="form-select" required>
                                    <option value="">Select College</option>
                                    <option value="BCU Campus">BCU Main Campus</option>
                                    <option value="Seshadripuram College">Seshadripuram College</option>
                                    <option value="Central College">Central College Campus</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <label class="col-md-3 form-label fw-bold">Username :</label>
                            <div class="col-md-9">
                                <input type="text" name="username" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <label class="col-md-3 form-label fw-bold">Password :</label>
                            <div class="col-md-9">
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <label class="col-md-3 form-label fw-bold">Confirm Password :</label>
                            <div class="col-md-9">
                                <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-4 form-check offset-md-3">
                            <input type="checkbox" class="form-check-input" id="terms" required>
                            <label class="form-check-label" for="terms">I agree to the <a href="#">Terms & Conditions</a></label>
                        </div>

                        <div class="d-flex justify-content-center gap-3">
                            <button type="submit" class="btn btn-navy px-4 fw-bold">REGISTER</button>
                            <button type="reset" class="btn btn-secondary px-4 fw-bold">RESET</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>