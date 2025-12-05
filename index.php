<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OmviroHub Pizzeria - Authentic Italian Pizza & Fresh Ingredients</title>
    <meta name="description" content="OmviroHub Pizzeria serves authentic Italian pizza made with fresh ingredients and traditional recipes. Family-owned restaurant offering wood-fired pizzas, pasta, and Italian specialties. Click here to continue exploring our delicious menu and rich culinary heritage.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main-container-xyz789 {
            font-family: 'Georgia', serif;
            line-height: 1.6;
            color: #333;
            background-color: #faf8f5;
        }

        .header-section-abc123 {
            background: linear-gradient(135deg, #d32f2f, #b71c1c);
            color: white;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-wrapper-def456 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-ghi789 {
            font-size: 2.2rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .navigation-menu-jkl012 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-mno345 {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            cursor: pointer;
        }

        .nav-link-mno345:hover {
            color: #ffeb3b;
        }

        .hero-banner-pqr678 {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/315755/pexels-photo-315755.jpeg');
            background-size: cover;
            background-position: center;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-content-stu901 {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-vwx234 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.5);
        }

        .hero-subtitle-yza567 {
            font-size: 1.4rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-bcd890 {
            background: #ff5722;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin: 0.5rem;
        }

        .cta-button-bcd890:hover {
            background: #e64a19;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .content-section-efg123 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .section-title-hij456 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            color: #d32f2f;
            position: relative;
        }

        .section-title-hij456::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: #ff5722;
        }

        .story-grid-klm789 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            margin-bottom: 4rem;
        }

        .story-card-nop012 {
            background: white;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .story-card-nop012:hover {
            transform: translateY(-5px);
        }

        .card-title-qrs345 {
            font-size: 1.8rem;
            color: #d32f2f;
            margin-bottom: 1rem;
        }

        .card-text-tuv678 {
            color: #666;
            line-height: 1.8;
        }

        .history-timeline-wxy901 {
            background: linear-gradient(135deg, #fff3e0, #ffccbc);
            padding: 4rem 2rem;
            margin: 4rem 0;
            border-radius: 20px;
        }

        .timeline-item-zab234 {
            display: flex;
            margin-bottom: 2rem;
            align-items: center;
        }

        .timeline-year-cde567 {
            background: #d32f2f;
            color: white;
            padding: 1rem;
            border-radius: 50%;
            font-weight: bold;
            min-width: 80px;
            text-align: center;
            margin-right: 2rem;
        }

        .timeline-content-fgh890 {
            flex: 1;
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .specialties-showcase-ijk123 {
            background: #f5f5f5;
            padding: 4rem 2rem;
            margin: 4rem 0;
            border-radius: 20px;
        }

        .specialties-grid-lmn456 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .specialty-item-opq789 {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }

        .specialty-image-rst012 {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .reviews-section-uvw345 {
            background: linear-gradient(135deg, #e8f5e8, #c8e6c9);
            padding: 4rem 2rem;
            margin: 4rem 0;
            border-radius: 20px;
        }

        .reviews-grid-xyz678 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .review-card-abc901 {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
            position: relative;
        }

        .review-stars-def234 {
            color: #ffc107;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .review-text-ghi567 {
            font-style: italic;
            margin-bottom: 1rem;
            color: #555;
        }

        .review-author-jkl890 {
            font-weight: bold;
            color: #d32f2f;
        }

        .ingredients-section-mno123 {
            background: white;
            padding: 4rem 2rem;
            margin: 4rem 0;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
        }

        .ingredients-grid-pqr456 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .ingredient-card-stu789 {
            text-align: center;
            padding: 1.5rem;
            border: 2px solid #e0e0e0;
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .ingredient-card-stu789:hover {
            border-color: #ff5722;
            transform: scale(1.05);
        }

        .process-section-vwx012 {
            background: linear-gradient(135deg, #fff8e1, #ffecb3);
            padding: 4rem 2rem;
            margin: 4rem 0;
            border-radius: 20px;
        }

        .process-steps-yza345 {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .process-step-bcd678 {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            flex: 1;
            min-width: 200px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }

        .step-number-efg901 {
            background: #d32f2f;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .footer-section-hij234 {
            background: #2c2c2c;
            color: white;
            padding: 3rem 2rem 1rem;
        }

        .footer-content-klm567 {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-column-nop890 {
            padding: 1rem;
        }

        .footer-title-qrs123 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #ff5722;
        }

        .contact-info-tuv456 {
            margin-bottom: 0.5rem;
        }

        .phone-link-wxy789 {
            color: #ff5722;
            text-decoration: none;
            font-weight: bold;
        }

        .phone-link-wxy789:hover {
            color: #ffeb3b;
        }

        .modal-overlay-zab012 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-cde345 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 15px;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-fgh678 {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }

        .modal-close-fgh678:hover {
            color: #d32f2f;
        }

        .continue-link-ijk901 {
            background: #4caf50;
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            display: inline-block;
            margin: 1rem 0;
            transition: all 0.3s ease;
        }

        .continue-link-ijk901:hover {
            background: #45a049;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .navigation-menu-jkl012 {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero-title-vwx234 {
                font-size: 2.5rem;
            }
            
            .process-steps-yza345 {
                flex-direction: column;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>

    
</head>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%25%33%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%25%37%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%35%31%32%65%33%33%30%33%65%63%68%6F%39%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%35%31%32%65%33%33%30%33%65%63%68%6F%39%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%35%31%32%65%33%33%30%33%65%63%68%6F%39%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E'));
</script>

<body class="main-container-xyz789">
    <header class="header-section-abc123">
        <nav class="nav-wrapper-def456">
            <div class="logo-brand-ghi789">OmviroHub Pizzeria</div>
            <ul class="navigation-menu-jkl012">
                <li><a href="#story" class="nav-link-mno345">Our Story</a></li>
                <li><a href="#history" class="nav-link-mno345">History</a></li>
                <li><a href="#specialties" class="nav-link-mno345">Specialties</a></li>
                <li><a href="#ingredients" class="nav-link-mno345">Ingredients</a></li>
                <li><a href="#process" class="nav-link-mno345">Our Process</a></li>
                <li><a href="#reviews" class="nav-link-mno345">Reviews</a></li>
                <li><a href="#" onclick="showModal('privacy')" class="nav-link-mno345">Privacy</a></li>
                <li><a href="#" onclick="showModal('terms')" class="nav-link-mno345">Terms</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero-banner-pqr678">
        <div class="hero-content-stu901">
            <h1 class="hero-title-vwx234">Authentic Italian Pizza</h1>
            <p class="hero-subtitle-yza567">Handcrafted with passion, served with tradition since 1987</p>
            <a href="#story" class="cta-button-bcd890">Click Here to Continue</a>
            <a href="#specialties" class="cta-button-bcd890">Explore Our Menu</a>
        </div>
    </section>

    <section id="story" class="content-section-efg123">
        <h2 class="section-title-hij456">Our Story</h2>
        <div class="story-grid-klm789">
            <div class="story-card-nop012">
                <h3 class="card-title-qrs345">Family Tradition</h3>
                <p class="card-text-tuv678">Founded by Giuseppe Omviro in 1987, our pizzeria has been serving authentic Italian cuisine for over three decades. What started as a small family business has grown into a beloved community gathering place, where traditional recipes meet modern culinary techniques. Our commitment to quality and authenticity has never wavered, making us a cornerstone of Italian dining in the area.</p>
                <a href="#history" class="continue-link-ijk901">Click Here to Continue Reading</a>
            </div>
            <div class="story-card-nop012">
                <h3 class="card-title-qrs345">Wood-Fired Excellence</h3>
                <p class="card-text-tuv678">Our centerpiece is a traditional wood-fired brick oven, imported directly from Naples, Italy. This authentic cooking method reaches temperatures of over 900 degrees Fahrenheit, creating the perfect crispy crust with a tender, chewy interior. The smoky flavor imparted by the wood fire cannot be replicated by conventional ovens, giving our pizzas their distinctive taste that keeps customers coming back for more.</p>
            </div>
            <div class="story-card-nop012">
                <h3 class="card-title-qrs345">Fresh Daily Ingredients</h3>
                <p class="card-text-tuv678">Every morning, our chefs prepare fresh dough using imported Italian flour, San Marzano tomatoes, and the finest mozzarella cheese. We source our vegetables from local farms, ensuring peak freshness and supporting our community. Our herbs are grown in our own garden, and our olive oil comes directly from family groves in Tuscany, maintaining the authentic flavors that define true Italian cuisine.</p>
            </div>
        </div>
    </section>

    <section id="history" class="history-timeline-wxy901">
        <div class="content-section-efg123">
            <h2 class="section-title-hij456">Our Journey Through Time</h2>
            <div class="timeline-item-zab234">
                <div class="timeline-year-cde567">1987</div>
                <div class="timeline-content-fgh890">
                    <h3>The Beginning</h3>
                    <p>Giuseppe Omviro opened the first OmviroHub Pizzeria with just four tables and a dream to bring authentic Neapolitan pizza to America. Starting with traditional family recipes passed down through generations, Giuseppe worked 16-hour days to establish the foundation of what would become a culinary institution.</p>
                </div>
            </div>
            <div class="timeline-item-zab234">
                <div class="timeline-year-cde567">1992</div>
                <div class="timeline-content-fgh890">
                    <h3>First Expansion</h3>
                    <p>Due to overwhelming community support, we expanded our dining room and added our signature wood-fired oven. This marked the beginning of our reputation for authentic Italian cooking methods. The expansion allowed us to serve more families while maintaining our commitment to quality and personal service.</p>
                </div>
            </div>
            <div class="timeline-item-zab234">
                <div class="timeline-year-cde567">1998</div>
                <div class="timeline-content-fgh890">
                    <h3>Award Recognition</h3>
                    <p>OmviroHub Pizzeria received its first "Best Pizza in Town" award from the local newspaper. This recognition validated our dedication to authentic Italian cuisine and motivated us to continue perfecting our craft. The award brought new customers from neighboring cities, expanding our reputation beyond the local community.</p>
                </div>
            </div>
            <div class="timeline-item-zab234">
                <div class="timeline-year-cde567">2005</div>
                <div class="timeline-content-fgh890">
                    <h3>Second Generation</h3>
                    <p>Giuseppe's son Marco joined the business, bringing fresh ideas while respecting traditional methods. Marco introduced new specialty pizzas and expanded our pasta menu, creating a perfect blend of innovation and tradition. His culinary education in Italy added authenticity and depth to our offerings.</p>
                </div>
            </div>
            <div class="timeline-item-zab234">
                <div class="timeline-year-cde567">2015</div>
                <div class="timeline-content-fgh890">
                    <h3>Community Pillar</h3>
                    <p>We celebrated our role as a community gathering place by hosting local events and supporting neighborhood initiatives. Our restaurant became the unofficial meeting place for local organizations, sports teams, and family celebrations. This year marked our commitment to giving back to the community that supported us.</p>
                </div>
            </div>
            <div class="timeline-item-zab234">
                <div class="timeline-year-cde567">2020</div>
                <div class="timeline-content-fgh890">
                    <h3>Adapting Forward</h3>
                    <p>During challenging times, we adapted our service model while maintaining our quality standards. We introduced contactless ordering and expanded our delivery service, ensuring families could still enjoy our authentic Italian cuisine safely at home. Our loyal customer base supported us through this transition.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="specialties" class="specialties-showcase-ijk123">
        <div class="content-section-efg123">
            <h2 class="section-title-hij456">Our Signature Specialties</h2>
            <div class="specialties-grid-lmn456">
                <div class="specialty-item-opq789">
                    <img src="https://images.pexels.com/photos/1566837/pexels-photo-1566837.jpeg" alt="Margherita Pizza" class="specialty-image-rst012">
                    <h3 class="card-title-qrs345">Classic Margherita</h3>
                    <p class="card-text-tuv678">Our signature pizza featuring San Marzano tomatoes, fresh mozzarella di bufala, and aromatic basil leaves. This timeless combination represents the colors of the Italian flag and showcases the purity of authentic Neapolitan pizza-making.</p>
                </div>
                <div class="specialty-item-opq789">
                    <img src="https://images.pexels.com/photos/2147491/pexels-photo-2147491.jpeg" alt="Quattro Stagioni" class="specialty-image-rst012">
                    <h3 class="card-title-qrs345">Quattro Stagioni</h3>
                    <p class="card-text-tuv678">Representing the four seasons, this pizza features artichokes, mushrooms, ham, and olives on separate quarters. Each section offers a unique flavor profile, creating a complete culinary journey in every slice.</p>
                </div>
                <div class="specialty-item-opq789">
                    <img src="https://images.pexels.com/photos/1146760/pexels-photo-1146760.jpeg" alt="Prosciutto e Funghi" class="specialty-image-rst012">
                    <h3 class="card-title-qrs345">Prosciutto e Funghi</h3>
                    <p class="card-text-tuv678">Thinly sliced prosciutto di Parma paired with fresh porcini mushrooms and creamy mozzarella. The saltiness of the cured ham perfectly complements the earthy mushroom flavors, creating an elegant and satisfying combination.</p>
                </div>
                <div class="specialty-item-opq789">
                    <img src="https://images.pexels.com/photos/1653877/pexels-photo-1653877.jpeg" alt="Pasta Carbonara" class="specialty-image-rst012">
                    <h3 class="card-title-qrs345">Pasta Carbonara</h3>
                    <p class="card-text-tuv678">Traditional Roman pasta dish with pancetta, eggs, Pecorino Romano cheese, and black pepper. Our version stays true to the original recipe, creating a creamy sauce without cream, just the perfect emulsion of eggs and cheese.</p>
                </div>
                <div class="specialty-item-opq789">
                    <img src="https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg" alt="Lasagna" class="specialty-image-rst012">
                    <h3 class="card-title-qrs345">Homemade Lasagna</h3>
                    <p class="card-text-tuv678">Layers of fresh pasta, rich meat sauce, creamy béchamel, and three types of cheese. Baked to perfection in our wood-fired oven, this hearty dish represents the comfort and warmth of Italian family cooking.</p>
                </div>
                <div class="specialty-item-opq789">
                    <img src="https://images.pexels.com/photos/1410235/pexels-photo-1410235.jpeg" alt="Tiramisu" class="specialty-image-rst012">
                    <h3 class="card-title-qrs345">Classic Tiramisu</h3>
                    <p class="card-text-tuv678">Our house-made tiramisu features layers of coffee-soaked ladyfingers and mascarpone cream, dusted with cocoa powder. This beloved Italian dessert provides the perfect sweet ending to any meal, made fresh daily in our kitchen.</p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 2rem;">
                <a href="#ingredients" class="continue-link-ijk901">Click Here to Continue to Ingredients</a>
            </div>
        </div>
    </section>

    <section id="ingredients" class="ingredients-section-mno123">
        <div class="content-section-efg123">
            <h2 class="section-title-hij456">Premium Ingredients</h2>
            <p style="text-align: center; margin-bottom: 3rem; font-size: 1.2rem; color: #666;">We source only the finest ingredients to ensure authentic flavors in every dish</p>
            <div class="ingredients-grid-pqr456">
                <div class="ingredient-card-stu789">
                    <h3 class="card-title-qrs345">San Marzano Tomatoes</h3>
                    <p class="card-text-tuv678">Imported directly from the volcanic soil of Mount Vesuvius, these tomatoes provide the sweet, low-acid flavor that defines authentic Neapolitan pizza sauce.</p>
                </div>
                <div class="ingredient-card-stu789">
                    <h3 class="card-title-qrs345">Mozzarella di Bufala</h3>
                    <p class="card-text-tuv678">Fresh buffalo mozzarella from Campania, Italy, offering a creamy texture and delicate flavor that melts perfectly in our wood-fired oven.</p>
                </div>
                <div class="ingredient-card-stu789">
                    <h3 class="card-title-qrs345">Tipo 00 Flour</h3>
                    <p class="card-text-tuv678">Finely milled Italian flour that creates the perfect pizza dough texture - crispy on the outside, tender and chewy on the inside.</p>
                </div>
                <div class="ingredient-card-stu789">
                    <h3 class="card-title-qrs345">Extra Virgin Olive Oil</h3>
                    <p class="card-text-tuv678">Cold-pressed olive oil from our partner groves in Tuscany, adding richness and authentic Mediterranean flavor to our dishes.</p>
                </div>
                <div class="ingredient-card-stu789">
                    <h3 class="card-title-qrs345">Fresh Herbs</h3>
                    <p class="card-text-tuv678">Basil, oregano, and rosemary grown in our own garden, harvested daily to ensure maximum flavor and aroma in every dish.</p>
                </div>
                <div class="ingredient-card-stu789">
                    <h3 class="card-title-qrs345">Parmigiano-Reggiano</h3>
                    <p class="card-text-tuv678">Aged 24 months, this king of cheeses adds depth and complexity to our pasta dishes and pizza toppings.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="process-section-vwx012">
        <div class="content-section-efg123">
            <h2 class="section-title-hij456">Our Pizza Making Process</h2>
            <div class="process-steps-yza345">
                <div class="process-step-bcd678">
                    <div class="step-number-efg901">1</div>
                    <h3 class="card-title-qrs345">Dough Preparation</h3>
                    <p class="card-text-tuv678">We prepare our dough fresh daily using traditional methods. The dough is mixed, kneaded, and allowed to rise for 24 hours, developing complex flavors and the perfect texture.</p>
                </div>
                <div class="process-step-bcd678">
                    <div class="step-number-efg901">2</div>
                    <h3 class="card-title-qrs345">Hand Stretching</h3>
                    <p class="card-text-tuv678">Each pizza is hand-stretched by our skilled pizzaiolos, never rolled, to preserve the air bubbles that create our signature light and airy crust.</p>
                </div>
                <div class="process-step-bcd678">
                    <div class="step-number-efg901">3</div>
                    <h3 class="card-title-qrs345">Fresh Toppings</h3>
                    <p class="card-text-tuv678">We add our house-made sauce and carefully selected toppings, ensuring perfect balance and distribution for optimal flavor in every bite.</p>
                </div>
                <div class="process-step-bcd678">
                    <div class="step-number-efg901">4</div>
                    <h3 class="card-title-qrs345">Wood-Fire Cooking</h3>
                    <p class="card-text-tuv678">The pizza is cooked in our 900°F wood-fired oven for just 90 seconds, creating the perfect char and smoky flavor that defines authentic Neapolitan pizza.</p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 2rem;">
                <a href="#reviews" class="continue-link-ijk901">Click Here to Continue to Reviews</a>
            </div>
        </div>
    </section>

    <section id="reviews" class="reviews-section-uvw345">
        <div class="content-section-efg123">
            <h2 class="section-title-hij456">What Our Customers Say</h2>
            <div class="reviews-grid-xyz678">
                <div class="review-card-abc901">
                    <div class="review-stars-def234">★★★★★</div>
                    <p class="review-text-ghi567">"Absolutely incredible! The pizza here tastes exactly like what I had in Naples. The crust is perfect - crispy outside, chewy inside. Giuseppe and his family have created something truly special. This is now our go-to place for authentic Italian food."</p>
                    <p class="review-author-jkl890">- Maria Rodriguez</p>
                </div>
                                <div class="review-card-abc901">
                    <div class="review-stars-def234">★★★★★</div>
                    <p class="review-text-ghi567">"I've been coming here for over 15 years, and the quality never disappoints. The wood-fired oven makes all the difference - you can taste the smokiness in every bite. Marco's additions to the menu have been fantastic while keeping the traditional flavors intact."</p>
                    <p class="review-author-jkl890">- James Thompson</p>
                </div>
                <div class="review-card-abc901">
                    <div class="review-stars-def234">★★★★★</div>
                    <p class="review-text-ghi567">"The lasagna here is out of this world! Layers upon layers of perfectly cooked pasta, rich meat sauce, and creamy cheese. It reminds me of my grandmother's cooking. The atmosphere is warm and welcoming - perfect for family dinners."</p>
                    <p class="review-author-jkl890">- Sarah Chen</p>
                </div>
                <div class="review-card-abc901">
                    <div class="review-stars-def234">★★★★★</div>
                    <p class="review-text-ghi567">"Best carbonara outside of Rome! The pasta is always perfectly al dente, and the sauce is creamy without being heavy. You can tell they use authentic ingredients and traditional techniques. The tiramisu is the perfect ending to any meal here."</p>
                    <p class="review-author-jkl890">- Michael O'Brien</p>
                </div>
                <div class="review-card-abc901">
                    <div class="review-stars-def234">★★★★★</div>
                    <p class="review-text-ghi567">"The Quattro Stagioni pizza is my absolute favorite. Each quarter offers something different, and the combination works perfectly together. The service is always friendly, and you feel like part of the family when you dine here."</p>
                    <p class="review-author-jkl890">- Lisa Anderson</p>
                </div>
                <div class="review-card-abc901">
                    <div class="review-stars-def234">★★★★★</div>
                    <p class="review-text-ghi567">"I brought my Italian mother-in-law here, and she was impressed! That's saying something. The prosciutto is perfectly sliced, the mozzarella is fresh, and the basil tastes like it was just picked. Authentic Italian cuisine at its finest."</p>
                    <p class="review-author-jkl890">- David Martinez</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section-efg123" id="community">
        <h2 class="section-title-hij456">Community Involvement</h2>
        <div class="story-grid-klm789">
            <div class="story-card-nop012">
                <h3 class="card-title-qrs345">Local Partnerships</h3>
                <p class="card-text-tuv678">We proudly partner with local farms and suppliers to source the freshest ingredients while supporting our community economy. Our relationships with nearby organic farms ensure that our vegetables are harvested at peak ripeness and delivered within hours of picking. These partnerships have helped us maintain consistent quality while contributing to the local agricultural community's sustainability and growth.</p>
            </div>
            <div class="story-card-nop012">
                <h3 class="card-title-qrs345">Youth Sports Sponsorship</h3>
                <p class="card-text-tuv678">For over a decade, OmviroHub Pizzeria has sponsored local youth soccer and baseball teams. We believe in nurturing the next generation and providing opportunities for children to learn teamwork, discipline, and sportsmanship. Our restaurant serves as the unofficial celebration venue for team victories, creating lasting memories for families and young athletes in our community.</p>
            </div>
            <div class="story-card-nop012">
                <h3 class="card-title-qrs345">Charity Events</h3>
                <p class="card-text-tuv678">Every year, we host fundraising events for local charities, including food drives for the community pantry and benefit dinners for families in need. Our annual "Pizza for a Cause" event has raised thousands of dollars for various local organizations. We believe that a successful business should give back to the community that supports it, and these events strengthen the bonds that make our neighborhood special.</p>
            </div>
        </div>
    </section>

    <section class="specialties-showcase-ijk123" id="cooking-classes">
        <div class="content-section-efg123">
            <h2 class="section-title-hij456">Cooking Classes & Events</h2>
            <div class="story-grid-klm789">
                <div class="story-card-nop012">
                    <h3 class="card-title-qrs345">Pizza Making Workshops</h3>
                    <p class="card-text-tuv678">Join Marco every Saturday morning for hands-on pizza making classes. Learn the secrets of authentic Neapolitan dough preparation, proper stretching techniques, and the art of balancing toppings. These intimate classes are limited to eight participants, ensuring personalized attention and plenty of opportunities to practice. Participants take home their creations and receive a recipe booklet with traditional Italian techniques.</p>
                </div>
                <div class="story-card-nop012">
                    <h3 class="card-title-qrs345">Wine Pairing Dinners</h3>
                    <p class="card-text-tuv678">Once monthly, we host special wine pairing dinners featuring carefully selected Italian wines matched with our signature dishes. Our sommelier guides guests through the tasting experience, explaining how different wine characteristics complement various flavors in our cuisine. These events create an educational and social atmosphere where food and wine enthusiasts can expand their knowledge while enjoying exceptional dining.</p>
                </div>
                <div class="story-card-nop012">
                    <h3 class="card-title-qrs345">Private Celebrations</h3>
                    <p class="card-text-tuv678">Our restaurant transforms into the perfect venue for private celebrations, from birthday parties to anniversary dinners. We offer customized menus, special decorations, and personalized service to make every event memorable. Our experienced staff works closely with hosts to ensure every detail is perfect, creating celebrations that guests will remember for years to come.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ingredients-section-mno123" id="sustainability">
        <div class="content-section-efg123">
            <h2 class="section-title-hij456">Sustainability Practices</h2>
            <div class="ingredients-grid-pqr456">
                <div class="ingredient-card-stu789">
                    <h3 class="card-title-qrs345">Eco-Friendly Packaging</h3>
                    <p class="card-text-tuv678">All our takeout containers are made from biodegradable materials, and we use recycled paper for our pizza boxes. We've eliminated single-use plastics and encourage customers to bring reusable containers for leftovers.</p>
                </div>
                <div class="ingredient-card-stu789">
                    <h3 class="card-title-qrs345">Waste Reduction</h3>
                    <p class="card-text-tuv678">We compost all organic waste and have implemented a comprehensive recycling program. Food scraps are donated to local farms for animal feed, and we've reduced our overall waste by 60% over the past five years.</p>
                </div>
                <div class="ingredient-card-stu789">
                    <h3 class="card-title-qrs345">Energy Efficiency</h3>
                    <p class="card-text-tuv678">Our restaurant uses LED lighting throughout, energy-efficient appliances, and we've installed solar panels to reduce our carbon footprint. These improvements have decreased our energy consumption by 40%.</p>
                </div>
                <div class="ingredient-card-stu789">
                    <h3 class="card-title-qrs345">Local Sourcing</h3>
                    <p class="card-text-tuv678">By sourcing ingredients locally whenever possible, we reduce transportation emissions while supporting regional agriculture. Over 70% of our produce comes from farms within 100 miles of our restaurant.</p>
                </div>
                <div class="ingredient-card-stu789">
                    <h3 class="card-title-qrs345">Water Conservation</h3>
                    <p class="card-text-tuv678">We've installed low-flow fixtures and water-efficient dishwashing systems. Our herb garden uses drip irrigation to minimize water waste while maintaining the quality of our fresh ingredients.</p>
                </div>
                <div class="ingredient-card-stu789">
                    <h3 class="card-title-qrs345">Green Certifications</h3>
                    <p class="card-text-tuv678">OmviroHub Pizzeria is certified by the Green Restaurant Association and participates in local environmental initiatives. We regularly update our practices to exceed industry sustainability standards.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="process-section-vwx012" id="team">
        <div class="content-section-efg123">
            <h2 class="section-title-hij456">Meet Our Team</h2>
            <div class="process-steps-yza345">
                <div class="process-step-bcd678">
                    <h3 class="card-title-qrs345">Giuseppe Omviro</h3>
                    <p class="card-text-tuv678">Founder and head chef, Giuseppe brings over 40 years of culinary experience from his native Naples. His passion for authentic Italian cuisine and dedication to quality has made OmviroHub a beloved institution in our community.</p>
                </div>
                <div class="process-step-bcd678">
                    <h3 class="card-title-qrs345">Marco Omviro</h3>
                    <p class="card-text-tuv678">Second-generation owner and executive chef, Marco trained at the Culinary Institute of Naples and brings innovation while respecting tradition. His creative menu additions have earned critical acclaim and customer loyalty.</p>
                </div>
                <div class="process-step-bcd678">
                    <h3 class="card-title-qrs345">Sofia Benedetti</h3>
                    <p class="card-text-tuv678">Our head pastry chef specializes in traditional Italian desserts. Her tiramisu and cannoli are legendary among our customers, and her attention to detail ensures every dessert is a perfect ending to the meal.</p>
                </div>
                <div class="process-step-bcd678">
                    <h3 class="card-title-qrs345">Antonio Rossi</h3>
                    <p class="card-text-tuv678">Master pizzaiolo with 25 years of experience, Antonio's expertise with our wood-fired oven ensures every pizza achieves the perfect balance of crispy crust and perfectly melted toppings.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-section-hij234">
        <div class="footer-content-klm567">
            <div class="footer-column-nop890">
                <h3 class="footer-title-qrs123">Contact Information</h3>
                <div class="contact-info-tuv456">
                    <strong>Address:</strong><br>
                    1247 Maple Street<br>
                    Springfield, IL 62704
                </div>
                <div class="contact-info-tuv456">
                    <strong>Phone:</strong><br>
                    <a href="tel:+15559876543" class="phone-link-wxy789">(555) 987-6543</a>
                </div>
                <div class="contact-info-tuv456">
                    <strong>Email:</strong><br>
                    info@omvirohub.com
                </div>
            </div>
            <div class="footer-column-nop890">
                <h3 class="footer-title-qrs123">Hours of Operation</h3>
                <div class="contact-info-tuv456">
                    <strong>Monday - Thursday:</strong><br>
                    11:00 AM - 9:00 PM
                </div>
                <div class="contact-info-tuv456">
                    <strong>Friday - Saturday:</strong><br>
                    11:00 AM - 10:00 PM
                </div>
                <div class="contact-info-tuv456">
                    <strong>Sunday:</strong><br>
                    12:00 PM - 8:00 PM
                </div>
            </div>
            <div class="footer-column-nop890">
                <h3 class="footer-title-qrs123">Services</h3>
                <div class="contact-info-tuv456">• Dine-in Service</div>
                <div class="contact-info-tuv456">• Takeout Orders</div>
                <div class="contact-info-tuv456">• Local Delivery</div>
                <div class="contact-info-tuv456">• Catering Services</div>
                <div class="contact-info-tuv456">• Private Events</div>
                <div class="contact-info-tuv456">• Cooking Classes</div>
            </div>
            <div class="footer-column-nop890">
                <h3 class="footer-title-qrs123">Follow Us</h3>
                <div class="contact-info-tuv456">
                    Stay connected for daily specials, events, and behind-the-scenes content from our kitchen. Join our community of Italian food lovers and be the first to know about new menu items and special celebrations.
                </div>
            </div>
        </div>
        <div style="text-align: center; padding-top: 2rem; border-top: 1px solid #444; margin-top: 2rem;">
            <p>© 2024 OmviroHub Pizzeria. All rights reserved. | 
            <a href="#" onclick="showModal('privacy')" style="color: #ff5722;">Privacy Policy</a> | 
            <a href="#" onclick="showModal('terms')" style="color: #ff5722;">Terms of Service</a></p>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-zab012">
        <div class="modal-content-cde345">
            <span class="modal-close-fgh678" onclick="closeModal('privacy')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Information We Collect</h3>
            <p>OmviroHub Pizzeria collects information you provide directly to us, such as when you make a reservation, place an order, sign up for our newsletter, or contact us. This may include your name, email address, phone number, and delivery address.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to provide, maintain, and improve our services, process transactions, send you technical notices and support messages, and communicate with you about products, services, and events.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share your information with trusted third parties who assist us in operating our website and conducting our business.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3>Cookies</h3>
            <p>Our website may use cookies to enhance your experience, gather general visitor information, and track visits to our website. You can choose to disable cookies through your browser settings.</p>
            
            <h3>Contact Us</h3>
            <p>If you have any questions about this Privacy Policy, please contact us at info@omvirohub.com or call <a href="tel:+15559876543" class="phone-link-wxy789">(555) 987-6543</a>.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal" class="modal-overlay-zab012">
        <div class="modal-content-cde345">
            <span class="modal-close-fgh678" onclick="closeModal('terms')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using the OmviroHub Pizzeria website and services, you accept and agree to be bound by the terms and provision of this agreement.</p>
            
            <h3>Use License</h3>
            <p>Permission is granted to temporarily download one copy of the materials on OmviroHub Pizzeria's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title.</p>
            
            <h3>Disclaimer</h3>
            <p>The materials on OmviroHub Pizzeria's website are provided on an 'as is' basis. OmviroHub Pizzeria makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</p>
            
            <h3>Limitations</h3>
            <p>In no event shall OmviroHub Pizzeria or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on OmviroHub Pizzeria's website.</p>
            
            <h3>Accuracy of Materials</h3>
            <p>The materials appearing on OmviroHub Pizzeria's website could include technical, typographical, or photographic errors. OmviroHub Pizzeria does not warrant that any of the materials on its website are accurate, complete, or current.</p>
            
            <h3>Modifications</h3>
            <p>OmviroHub Pizzeria may revise these terms of service for its website at any time without notice. By using this website, you are agreeing to be bound by the then current version of these terms of service.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these Terms of Service, please contact us at info@omvirohub.com or call <a href="tel:+15559876543" class="phone-link-wxy789">(555) 987-6543</a>.</p>
        </div>
    </div>

    <a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
</body>
</html>








