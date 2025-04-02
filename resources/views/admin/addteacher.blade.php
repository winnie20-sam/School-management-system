
    <style>
        /* From Uiverse.io by G4b413l */
        .group {
            position: relative;
            margin-bottom: 25px;
        }

        .input {
            font-size: 16px;
            padding: 10px 10px 10px 5px;
            display: block;
            width: 100%;
            border: none;
            border-bottom: 1px solid #515151;
            background: transparent;
        }

        .input:focus {
            outline: none;
        }

        label {
            color: #999;
            font-size: 18px;
            font-weight: normal;
            position: absolute;
            pointer-events: none;
            left: 5px;
            top: 10px;
            transition: 0.2s ease all;
        }

        .input:focus ~ label, .input:valid ~ label {
            top: -20px;
            font-size: 14px;
            color: #5264AE;
        }

        .bar {
            position: relative;
            display: block;
            width: 100%;
        }

        .bar:before, .bar:after {
            content: '';
            height: 2px;
            width: 0;
            bottom: 1px;
            position: absolute;
            background: #5264AE;
            transition: 0.2s ease all;
        }

        .bar:before {
            left: 50%;
        }

        .bar:after {
            right: 50%;
        }

        .input:focus ~ .bar:before, .input:focus ~ .bar:after {
            width: 50%;
        }

        .highlight {
            position: absolute;
            height: 60%;
            width: 100px;
            top: 25%;
            left: 0;
            pointer-events: none;
            opacity: 0.5;
        }

        .input:focus ~ .highlight {
            animation: inputHighlighter 0.3s ease;
        }

        @keyframes inputHighlighter {
            from {
                background: #5264AE;
            }

            to {
                width: 0;
                background: transparent;
            }
        }



        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 800px;
        }

        .submit-btn {
            width: 100%;
            background: #5264AE;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-btn:hover {
            background: #414b9b;
        }
    </style>


    <div class="container">
        <h2 style="text-align: center; margin-bottom: 20px; color:#414b9b;">Add Teacher</h2>
        <hr>
        <form action="{{ route('teachers.store') }}" method="POST">
            @csrf
            <div class="group">
                <input required type="text" name="first_name" class="input">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>First Name</label>
            </div>

            <div class="group">
                <input required type="text" name="last_name" class="input">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Last Name</label>
            </div>

            <div class="group">
                <input required type="email" name="email" class="input">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Email</label>
            </div>

            <div class="group">
                <input required type="text" name="phone" class="input">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Phone</label>
            </div>

            <div class="group">
                <input required type="text" name="national_id" class="input">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>National ID</label>
            </div>

            <div class="group">
                <input required type="text" name="tsc_number" class="input">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>TSC Number</label>
            </div>

            <div class="group">
                <select required name="gender" class="input">
                    <option value="" disabled selected>Choose Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <span class="highlight"></span>
                <span class="bar"></span>
            </div>

            <div class="group">
                <input required type="date" name="date_of_birth" class="input">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Date of Birth</label>
            </div>

            <div class="group">
                <input required type="text" name="qualification" class="input">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Qualification</label>
            </div>

            <div class="group">
                <input required type="text" name="subject_specialization" class="input">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Subject Specialization</label>
            </div>

            <div class="group">
                <select required name="employment_type" class="input">
                    <option value="" disabled selected>Choose Employment Type</option>
                    <option value="Permanent">Permanent</option>
                    <option value="Contract">Contract</option>
                </select>
                <span class="highlight"></span>
                <span class="bar"></span>
            </div>

            <div class="group">
                <input required type="date" name="date_of_employment" class="input">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Date of Employment</label>
            </div>

            <div class="group">
                <input required type="text" name="address" class="input">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Address</label>
            </div>

            <button type="submit" class="submit-btn">Add Teacher</button>
        </form>
    </div>

