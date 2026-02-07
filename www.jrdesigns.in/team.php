<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="img2/JR-new-logo.png" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JR Design Get Free Design Quote</title>
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #fff9f9 0%, #ffe8e8 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 25px;
            box-shadow: 0 15px 40px rgba(255, 107, 107, 0.1);
            width: 100%;
            max-width: 650px;
            backdrop-filter: blur(10px);
        }

        h1 {
            color: #2a2a2a;
            margin-bottom: 30px;
            text-align: center;
            font-size: 2.8em;
            position: relative;
            background: linear-gradient(135deg, #ff6b6b 0%, #ff8e8e 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .form-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .form-header p {
            color: #666;
            font-size: 1.1em;
        }

        .form-group {
            margin-bottom: 30px;
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #4a4a4a;
            font-weight: 600;
            font-size: 0.95em;
        }

        label span.required {
            color: #ff6b6b;
            margin-left: 3px;
        }

        input, select, textarea {
            width: 100%;
            padding: 15px 25px;
            border: 2px solid #ffe6e6;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #fffafa;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #ff6b6b;
            background: white;
            outline: none;
            box-shadow: 0 0 15px rgba(255, 107, 107, 0.15);
        }

        .location-group {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }

        .location-option {
            flex: 1;
            text-align: center;
        }

        .location-option input[type="radio"] {
            display: none;
        }

        .location-option label {
            padding: 20px;
            background: #fff5f5;
            border: 2px solid #ffe6e6;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .location-option label i {
            color: #ff6b6b;
        }

        .location-option input[type="radio"]:checked + label {
            border-color: #ff6b6b;
            background: white;
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.1);
        }

        button {
            background: linear-gradient(135deg, #ff6b6b 0%, #ff8e8e 100%);
            color: white;
            padding: 18px 35px;
            border: none;
            border-radius: 12px;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(255, 107, 107, 0.3);
        }

        button::after {
            content: '→';
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0;
            transition: all 0.3s ease;
        }

        button:hover::after {
            opacity: 1;
            right: 25px;
        }

        .form-note {
            text-align: center;
            margin-top: 25px;
            color: #888;
            font-size: 0.95em;
        }

        .icon-input {
            position: relative;
        }

        .icon-input i {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #ff8e8e;
            font-size: 1.1em;
        }

        .icon-input input {
            padding-left: 50px;
        }

        .budget-slider {
            margin: 20px 0;
        }

        .budget-display {
            text-align: center;
            font-size: 1.2em;
            color: #ff6b6b;
            font-weight: 600;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-header">
            <h1>Get Your Free Design Quote</h1>
            <p>Start your dream interior design journey with a free consultation</p>
        </div>
        
        <form id="consultationForm">
            <!-- Personal Details -->
            <div class="form-group icon-input">
                <i class="fas fa-user-tag"></i>
                <input type="text" id="name" name="name" placeholder="Full Name" required>
            </div>

            <div class="form-group icon-input">
                <i class="fas fa-mobile-alt"></i>
                <input type="tel" id="phone" name="phone" placeholder="Contact Number" 
                       pattern="[0-9]{10}" required>
            </div>

            <!-- Location Section -->
            <div class="location-group">
                <div class="location-option">
                    <input type="radio" id="hyderabad" name="location" value="Hyderabad" required>
                    <label for="hyderabad"><i class="fas fa-city"></i>Hyderabad</label>
                </div>
                <div class="location-option">
                    <input type="radio" id="non-hyderabad" name="location" value="Other City">
                    <label for="non-hyderabad"><i class="fas fa-globe-asia"></i>Other City</label>
                </div>
            </div>

            <div class="form-group icon-input">
                <i class="fas fa-map-marked-alt"></i>
                <input type="text" id="exact-location" name="exact-location" 
                       placeholder="Complete Address" required>
            </div>

            <div class="form-group">
                <label>Pincode <span class="required">*</span></label>
                <input type="number" id="pincode" name="pincode" required maxlength="6">
            </div>

            <!--- Services Details--->

         <div class="form-group">
                <label>Service Type <span class="required">*</span></label>
                <select id="serviceType" name="ServiceType" required>
                    <option value="">Select Services Type</option>
                    <option value="Interior Design">Interior Design</option>
                    <option value="Electrical & Lighting">Electrical & Lighting</option>
                    <option value="False Ceiling & Flooring">False Ceiling & Flooring</option>
                    <option value="Painting">Painting</option>
                    <option value="Blinds & Curtains">Blinds & Curtains</option>
                    <option value="Modular Kitchen & Crockery Units">Modular Kitchen & Crockery Units</option>
                </select>
            </div>

            <!-- Project Details -->
            <div class="form-group">
                <label>Property Type <span class="required">*</span></label>
                <select id="propertyType" name="propertyType" required>
                    <option value="">Select Property Type</option>
                    <option value="1 BHK">1 BHK Apartment</option>
                    <option value="2 BHK">2 BHK Apartment</option>
                    <option value="3 BHK">3 BHK Apartment</option>
                    <option value="Villa">Premium Villa</option>
                    <option value="Office">Office Space</option>
                    <option value="Commercial">Commercial Property</option>
                </select>
            </div>

            <div class="form-group">
                <label>Preferred Design Style</label>
                <select id="designStyle">
                    <option value="">Select Design Style</option>
                    <option value="Modern">Modern Contemporary</option>
                    <option value="Traditional">Traditional</option>
                    <option value="Minimalist">Minimalist</option>
                    <option value="Luxury">Luxury</option>
                    <option value="Eclectic">Eclectic Mix</option>
                </select>
            </div>

            <button type="submit">
                Get Free Quote & Consultation
            </button>
        </form>

        <p class="form-note">Our design expert will contact you within 1 business day</p>

        
    </div>

<script>
document.getElementById('consultationForm').addEventListener('submit', function (e) {
    e.preventDefault();

    // Collect form data
    const name = document.getElementById('name').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const location = document.querySelector('input[name="location"]:checked').value;
    const address = document.getElementById('exact-location').value.trim();
    const pincode = document.getElementById('pincode').value.trim();
   const serviceType = document.getElementById('serviceType').value;
    const propertyType = document.getElementById('propertyType').value;
    const designStyle = document.getElementById('designStyle').value;

    // Clean plain-text WhatsApp message
    const message =
`NEW DESIGN QUOTE REQUEST

Client Details
Name: ${name}
Contact: ${phone}

Location Details
City: ${location}
Address: ${address}
Pincode: ${pincode}

Service Details
Service: ${serviceType}

Project Details
Property Type: ${propertyType}
Design Style: ${designStyle}

Next Steps
Our team will contact you within 24 hours.`;

    // WhatsApp configuration
    const whatsappNumber = '919866876934';
    const whatsappUrl =
        'https://wa.me/' + whatsappNumber +
        '?text=' + encodeURIComponent(message);

    // Open WhatsApp
    window.open(whatsappUrl, '_blank');

    // Reset form
    this.reset();
});
</script>



</body>

</html>