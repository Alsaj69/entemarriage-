<?php /* Template Name: Registration Page */ ?>
<?php get_header(); ?>

<div class="register-page" style="background: #f8f9fa; min-height: 100vh; padding: 40px 0;">
    <div class="container" style="max-width: 800px; margin: 0 auto; padding: 0 20px;">
        
        <!-- Page Header -->
        <div class="page-header" style="text-align: center; margin-bottom: 40px;">
            <h1 style="color: #333; font-size: 2.5rem; margin-bottom: 10px;">🔐 EnteMarriage Registration Form</h1>
            <p style="color: #666; font-size: 1.1rem;">Join thousands of verified profiles to find your perfect match</p>
        </div>

        <!-- Registration Form -->
        <div class="registration-container" style="background: #fff; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); padding: 40px;">
            
            <form id="registration-form" style="display: grid; gap: 20px;">
                
                <!-- Full Name -->
                <div class="form-group">
                    <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Full Name *</label>
                    <input type="text" name="full_name" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
                </div>

                <!-- Gender and Date of Birth -->
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div class="form-group">
                        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Gender *</label>
                        <select name="gender" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Date of Birth *</label>
                        <input type="date" name="date_of_birth" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
                    </div>
                </div>

                <!-- Religion and Caste/Community -->
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div class="form-group">
                        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Religion *</label>
                        <select name="religion" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
                            <option value="">Select Religion</option>
                            <option value="hindu">Hindu</option>
                            <option value="muslim">Muslim</option>
                            <option value="christian">Christian</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Caste / Community *</label>
                        <input type="text" name="caste_community" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;" placeholder="e.g., Nair, Ezhava, etc.">
                    </div>
                </div>

                <!-- Mother Tongue and Phone Number -->
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div class="form-group">
                        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Mother Tongue *</label>
                        <input type="text" name="mother_tongue" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;" placeholder="e.g., Malayalam, Tamil, etc.">
                    </div>
                    <div class="form-group">
                        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Phone Number *</label>
                        <input type="tel" name="phone_number" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;" placeholder="+91 9876543210">
                    </div>
                </div>

                <!-- Email Address -->
                <div class="form-group">
                    <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Email Address *</label>
                    <input type="email" name="email_address" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;" placeholder="your.email@example.com">
                </div>

                <!-- Marital Status and Education -->
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div class="form-group">
                        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Marital Status *</label>
                        <select name="marital_status" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
                            <option value="">Select Status</option>
                            <option value="never_married">Never Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="widowed">Widowed</option>
                            <option value="separated">Separated</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Education Qualification *</label>
                        <input type="text" name="education" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;" placeholder="e.g., B.Tech, MBBS, MBA, etc.">
                    </div>
                </div>

                <!-- Occupation and Annual Income -->
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div class="form-group">
                        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Occupation *</label>
                        <input type="text" name="occupation" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;" placeholder="e.g., Software Engineer, Doctor, etc.">
                    </div>
                    <div class="form-group">
                        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Annual Income (Optional)</label>
                        <input type="text" name="annual_income" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;" placeholder="e.g., 5-10 Lakhs">
                    </div>
                </div>

                <!-- Location -->
                <div class="form-group">
                    <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Location (District, State) *</label>
                    <input type="text" name="location" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;" placeholder="e.g., Ernakulam, Kerala">
                </div>

                <!-- Height and Weight -->
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div class="form-group">
                        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Height *</label>
                        <select name="height" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
                            <option value="">Select Height</option>
                            <option value="4'6\"">4'6" (137 cm)</option>
                            <option value="4'7\"">4'7" (140 cm)</option>
                            <option value="4'8\"">4'8" (142 cm)</option>
                            <option value="4'9\"">4'9" (145 cm)</option>
                            <option value="4'10\"">4'10" (147 cm)</option>
                            <option value="4'11\"">4'11" (150 cm)</option>
                            <option value="5'0\"">5'0" (152 cm)</option>
                            <option value="5'1\"">5'1" (155 cm)</option>
                            <option value="5'2\"">5'2" (157 cm)</option>
                            <option value="5'3\"">5'3" (160 cm)</option>
                            <option value="5'4\"">5'4" (163 cm)</option>
                            <option value="5'5\"">5'5" (165 cm)</option>
                            <option value="5'6\"">5'6" (168 cm)</option>
                            <option value="5'7\"">5'7" (170 cm)</option>
                            <option value="5'8\"">5'8" (173 cm)</option>
                            <option value="5'9\"">5'9" (175 cm)</option>
                            <option value="5'10\"">5'10" (178 cm)</option>
                            <option value="5'11\"">5'11" (180 cm)</option>
                            <option value="6'0\"">6'0" (183 cm)</option>
                            <option value="6'1\"">6'1" (185 cm)</option>
                            <option value="6'2\"">6'2" (188 cm)</option>
                            <option value="6'3\"">6'3" (191 cm)</option>
                            <option value="6'4\"">6'4" (193 cm)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Weight (Optional)</label>
                        <input type="text" name="weight" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;" placeholder="e.g., 65 kg">
                    </div>
                </div>

                <!-- Profile For -->
                <div class="form-group">
                    <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Profile For *</label>
                    <select name="profile_for" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
                        <option value="">Select Profile For</option>
                        <option value="self">Self</option>
                        <option value="son">Son</option>
                        <option value="daughter">Daughter</option>
                        <option value="brother">Brother</option>
                        <option value="sister">Sister</option>
                        <option value="friend">Friend</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <!-- Short Bio -->
                <div class="form-group">
                    <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Short Bio *</label>
                    <textarea name="short_bio" required rows="4" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px; resize: vertical;" placeholder="Tell us about yourself, your interests, family background, and what you're looking for in a life partner..."></textarea>
                </div>

                <!-- Upload Photo -->
                <div class="form-group">
                    <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Upload Photo *</label>
                    <input type="file" name="profile_photo" accept="image/*" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
                    <small style="color: #666; font-size: 12px; margin-top: 5px; display: block;">Upload a clear, recent photo. Accepted formats: JPG, PNG, GIF. Max size: 5MB</small>
                </div>

                <!-- Voice or Video Introduction -->
                <div class="form-group">
                    <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Voice or Video Introduction (Optional)</label>
                    <input type="file" name="voice_video" accept="audio/*,video/*" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
                    <small style="color: #666; font-size: 12px; margin-top: 5px; display: block;">Upload a voice note or video introduction (Max 2 minutes, 50MB)</small>
                </div>

                <!-- Agreement Checkbox -->
                <div class="form-group" style="margin-top: 20px;">
                    <label style="display: flex; align-items: flex-start; gap: 10px; cursor: pointer;">
                        <input type="checkbox" name="agreement" required style="margin-top: 4px;">
                        <span style="color: #333; line-height: 1.5;">
                            ✓ I confirm the details are true and I agree to be contacted by EnteMarriage for further communication. I also agree to the 
                            <a href="/terms-conditions" style="color: #e65100; text-decoration: none;">Terms & Conditions</a> and 
                            <a href="/privacy-policy" style="color: #e65100; text-decoration: none;">Privacy Policy</a>.
                        </span>
                    </label>
                </div>

                <!-- Submit Button -->
                <div style="text-align: center; margin-top: 30px;">
                    <button type="submit" style="background: #e65100; color: #fff; padding: 15px 50px; border: none; border-radius: 5px; font-size: 18px; font-weight: bold; cursor: pointer; transition: background 0.3s; min-width: 200px;">
                        Submit Registration
                    </button>
                </div>

                <!-- Help Text -->
                <div style="text-align: center; margin-top: 20px; padding-top: 20px; border-top: 1px solid #eee;">
                    <p style="color: #666; font-size: 14px; margin: 0;">
                        Need help? Contact our support team at 📞 +91 9544146660 or 📧 support@entemarriage.com
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('registration-form');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Basic validation
        const requiredFields = form.querySelectorAll('[required]');
        let isValid = true;
        
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                field.style.borderColor = '#dc3545';
                isValid = false;
            } else {
                field.style.borderColor = '#ddd';
            }
        });
        
        // Validate email format
        const email = form.querySelector('input[name="email_address"]');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email.value && !emailRegex.test(email.value)) {
            email.style.borderColor = '#dc3545';
            isValid = false;
        }
        
        // Validate phone number format
        const phone = form.querySelector('input[name="phone_number"]');
        const phoneRegex = /^[\+]?[0-9\s\-\(\)]{10,}$/;
        if (phone.value && !phoneRegex.test(phone.value)) {
            phone.style.borderColor = '#dc3545';
            isValid = false;
        }
        
        if (isValid) {
            // Show success message
            const container = document.querySelector('.container');
            container.innerHTML = `
                <div style="text-align: center; padding: 60px 20px; background: #fff; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
                    <div style="font-size: 4rem; margin-bottom: 20px;">✅</div>
                    <h2 style="color: #28a745; font-size: 2.5rem; margin-bottom: 20px;">Thank you for registering!</h2>
                    <p style="color: #666; font-size: 1.2rem; margin-bottom: 30px; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.6;">
                        Our support team will review your profile and contact you shortly. You will receive a confirmation email within 24 hours.
                    </p>
                    <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin: 30px 0;">
                        <h4 style="color: #333; margin-bottom: 15px;">What happens next?</h4>
                        <div style="text-align: left; max-width: 400px; margin: 0 auto;">
                            <p style="margin: 10px 0; color: #666;">📋 Profile verification (1-2 days)</p>
                            <p style="margin: 10px 0; color: #666;">📧 Email confirmation</p>
                            <p style="margin: 10px 0; color: #666;">🔍 Profile goes live</p>
                            <p style="margin: 10px 0; color: #666;">💕 Start receiving matches</p>
                        </div>
                    </div>
                    <div style="margin-top: 30px;">
                        <a href="/" style="background: #e65100; color: #fff; padding: 12px 30px; border-radius: 5px; text-decoration: none; font-weight: bold; margin-right: 15px;">Back to Home</a>
                        <a href="/login" style="background: #28a745; color: #fff; padding: 12px 30px; border-radius: 5px; text-decoration: none; font-weight: bold;">Login</a>
                    </div>
                </div>
            `;
        } else {
            // Scroll to first error field
            const firstError = form.querySelector('[style*="border-color: rgb(220, 53, 69)"]');
            if (firstError) {
                firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                firstError.focus();
            }
        }
    });
    
    // Real-time validation
    const inputs = form.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            if (this.hasAttribute('required') && !this.value.trim()) {
                this.style.borderColor = '#dc3545';
            } else {
                this.style.borderColor = '#ddd';
            }
        });
        
        input.addEventListener('input', function() {
            if (this.style.borderColor === 'rgb(220, 53, 69)') {
                this.style.borderColor = '#ddd';
            }
        });
    });
});
</script>

<?php get_footer(); ?>