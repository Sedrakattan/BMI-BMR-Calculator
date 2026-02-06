# BMI & BMR Health Calculator 🚀
### Bunyan Initiative Training - First Task

This is a professional health calculator built as the first task in the **Bunyan Initiative** bootcamp. The application calculates body metrics and provides health suggestions based on user input.

## 🌟 Features
- **BMI Calculation**: Calculates Body Mass Index and classifies it (Underweight, Normal, Overweight, Obese).
- **BMR Calculation**: Uses the **Harris-Benedict Equation** to determine basal metabolic rate based on gender, weight, height, and age.
- **Calorie Intake Suggestion**: Provides daily calorie needs based on the user's activity level and fitness goals (Lose, Maintain, or Gain weight).
- **Data Validation**: Includes a dedicated `Validator` class to ensure all user inputs are accurate and safe.
- **MVC Architecture**: Organized code structure separating Logic (Controllers), Presentation (Views), and Helper Functions.

## 🛠️ Built With
- **Backend**: PHP (Core logic and functions).
- **Frontend**: HTML5 & Tailwind CSS (Responsive and modern design).
- **Pattern**: Simplified MVC (Model-View-Controller).

## 📐 Formulas Used
1. **BMI Formula**: 
   `BMI = weight (kg) / [height (m)]²`
2. **BMR (Men)**: 
   `88.362 + (13.397 * weight) + (4.799 * height) - (5.677 * age)`
3. **BMR (Women)**: 
   `447.593 + (9.247 * weight) + (3.098 * height) - (4.330 * age)`

## 🚀 How to Run
1. Clone the repository to your local server (e.g., Laragon or XAMPP `www` or `htdocs` folder).
2. Open your browser and navigate to `http://localhost/your-project-folder/index.php`.
3. Enter your data and get your health report instantly!

---
*Developed with passion during the Bunyan Initiative Bootcamp.*
حاسبة صحية متكاملة باستخدام PHP .
