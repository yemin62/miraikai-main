<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f7f5ef">
    <title>ミライ買い | 買う前に、未来を見る。</title>

    <style>
        :root {
            --bg: #f7f5ef;
            --surface: #ffffff;
            --text: #292d27;
            --muted: #777b72;
            --green: #536b4c;
            --green-dark: #3f5539;
            --lime: #e6edce;
            --border: #e8e6dd;
            --shadow: 0 12px 40px rgba(43, 52, 35, .07);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, "Noto Sans JP", sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.7;
        }

        input,
        button {
            font: inherit;
        }

        button {
            cursor: pointer;
        }

        .container {
            width: min(1080px, calc(100% - 36px));
            margin: auto;
        }

        .ambient {
            position: fixed;
            width: 280px;
            height: 280px;
            border-radius: 50%;
            filter: blur(75px);
            opacity: .4;
            pointer-events: none;
            z-index: -1;
            animation: float 9s ease-in-out infinite alternate;
        }

        .ambient-one {
            background: #dce8c8;
            top: 80px;
            left: -140px;
        }

        .ambient-two {
            background: #f5d7b0;
            top: 400px;
            right: -140px;
            animation-delay: -4s;
        }

        @keyframes float {
            to {
                transform: translate(35px, 30px) scale(1.12);
            }
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            padding: 24px 0;
        }

        .logo {
            font-size: 25px;
            font-weight: 850;
            letter-spacing: -1px;
        }

        .logo span {
            color: var(--green);
        }

        .header-note {
            font-size: 12px;
            color: var(--muted);
        }

        .hero {
            display: grid;
            grid-template-columns: 1.3fr .7fr;
            align-items: center;
            gap: 25px;
            padding: 48px 42px;
            border-radius: 30px;
            background: #e8eddf;
            overflow: hidden;
            animation: appear .7s ease both;
        }

        .eyebrow {
            display: inline-block;
            padding: 6px 13px;
            background: rgba(255, 255, 255, .7);
            color: var(--green-dark);
            border-radius: 30px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .hero h1 {
            margin: 18px 0 12px;
            font-size: clamp(34px, 5vw, 54px);
            line-height: 1.25;
            letter-spacing: -1.5px;
        }

        .hero h1 span {
            color: var(--green);
        }

        .hero p {
            max-width: 460px;
            color: #62685c;
        }

        .button {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            padding: 13px 20px;
            border: none;
            border-radius: 13px;
            color: white;
            background: var(--green);
            text-decoration: none;
            font-weight: 700;
            transition: transform .2s, background .2s;
        }

        .button:hover {
            background: var(--green-dark);
            transform: translateY(-2px);
        }

        .hero-art {
            min-height: 220px;
            display: grid;
            place-items: center;
            position: relative;
        }

        .orbit {
            position: absolute;
            width: 210px;
            height: 210px;
            border: 1px solid rgba(83, 107, 76, .3);
            border-radius: 50%;
            animation: rotate 20s linear infinite;
        }

        .orbit::after {
            content: "";
            position: absolute;
            top: 20px;
            left: 35px;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            background: #d69c58;
        }

        .hero-icon {
            width: 140px;
            height: 140px;
            display: grid;
            place-items: center;
            border-radius: 40px;
            background: #fffdf6;
            font-size: 64px;
            box-shadow: var(--shadow);
            animation: bob 4s ease-in-out infinite;
        }

        @keyframes rotate {
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes bob {

            0%,
            100% {
                transform: translateY(0) rotate(-5deg);
            }

            50% {
                transform: translateY(-10px) rotate(3deg);
            }
        }

        @keyframes appear {
            from {
                opacity: 0;
                transform: translateY(18px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section-heading {
            margin: 44px 0 18px;
        }

        .section-heading h2 {
            font-size: 27px;
            margin: 0 0 5px;
        }

        .section-heading p {
            color: var(--muted);
            margin: 0;
            font-size: 14px;
        }

        .simulator {
            display: grid;
            grid-template-columns: 1fr .9fr;
            gap: 22px;
            align-items: start;
        }

        .card {
            padding: 26px;
            border-radius: 23px;
            background: var(--surface);
            border: 1px solid var(--border);
            box-shadow: var(--shadow);
            animation: appear .7s ease both;
        }

        .card h3 {
            margin: 0 0 4px;
            font-size: 20px;
        }

        .muted {
            margin: 0 0 23px;
            color: var(--muted);
            font-size: 13px;
        }

        .field {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-size: 13px;
            font-weight: 700;
        }

        input {
            width: 100%;
            min-height: 48px;
            padding: 11px 13px;
            border: 1px solid var(--border);
            border-radius: 12px;
            background: #fdfcf9;
            color: var(--text);
            outline: none;
            transition: border .2s, box-shadow .2s;
        }

        input:focus {
            border-color: var(--green);
            box-shadow: 0 0 0 3px rgba(83, 107, 76, .12);
        }

        input[type="file"] {
            padding: 10px;
            font-size: 12px;
        }

        .hint {
            margin-top: 5px;
            font-size: 11px;
            color: var(--muted);
        }

        .two-columns {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 13px;
        }

        .photo-preview {
            display: none;
            margin: 12px 0 20px;
            border-radius: 17px;
            overflow: hidden;
            background: #f4f1e8;
        }

        .photo-preview.visible {
            display: block;
            animation: appear .35s ease both;
        }

        .photo-preview img {
            display: block;
            width: 100%;
            max-height: 280px;
            object-fit: contain;
        }

        .photo-caption {
            padding: 8px 12px;
            font-size: 12px;
            color: var(--muted);
            overflow-wrap: anywhere;
        }

        .full-button {
            width: 100%;
            margin-top: 3px;
        }

        .result-card {
            position: sticky;
            top: 20px;
            padding: 27px;
            border-radius: 24px;
            background: #29372c;
            color: white;
            overflow: hidden;
        }

        .result-label {
            color: #d3dccb;
            font-size: 12px;
            letter-spacing: 1px;
        }

        .result-name {
            margin: 6px 0 18px;
            font-size: 22px;
            overflow-wrap: anywhere;
        }

        .result-photo {
            display: none;
            margin-bottom: 18px;
            background: #f6f3e9;
            border-radius: 15px;
            overflow: hidden;
        }

        .result-photo.visible {
            display: block;
        }

        .result-photo img {
            width: 100%;
            height: 180px;
            object-fit: contain;
            display: block;
        }

        .main-result {
            padding: 18px;
            margin-bottom: 12px;
            border-radius: 16px;
            background: rgba(255, 255, 255, .08);
        }

        .main-result small,
        .metric small {
            display: block;
            color: #d0d8cd;
            font-size: 12px;
        }

        .big-number {
            display: block;
            margin-top: 5px;
            font-size: clamp(29px, 4vw, 38px);
            font-weight: 800;
            line-height: 1.4;
            overflow-wrap: anywhere;
            font-variant-numeric: tabular-nums;
        }

        .metrics {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .metric {
            min-width: 0;
            padding: 15px;
            border-radius: 14px;
            background: rgba(255, 255, 255, .06);
        }

        .metric strong {
            display: block;
            margin-top: 5px;
            font-size: 20px;
            overflow-wrap: anywhere;
        }

        .progress-track {
            height: 6px;
            margin-top: 18px;
            background: rgba(255, 255, 255, .16);
            border-radius: 20px;
            overflow: hidden;
        }

        .progress-bar {
            width: 0;
            height: 100%;
            border-radius: 20px;
            background: #d5e7b9;
            transition: width .4s ease;
        }

        .result-message {
            padding-top: 15px;
            margin: 16px 0 0;
            border-top: 1px solid rgba(255, 255, 255, .16);
            font-size: 13px;
            color: #e1e8dc;
        }

        .updated {
            animation: pulse .4s ease;
        }

        @keyframes pulse {
            50% {
                transform: scale(1.01);
            }
        }

        .steps {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin: 20px 0 50px;
        }

        .step {
            padding: 22px;
            border: 1px solid var(--border);
            border-radius: 18px;
            background: rgba(255, 255, 255, .75);
            transition: transform .2s, box-shadow .2s;
        }

        .step:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow);
        }

        .step-number {
            width: 35px;
            height: 35px;
            display: grid;
            place-items: center;
            border-radius: 12px;
            background: var(--lime);
            color: var(--green-dark);
            font-weight: 800;
        }

        .step h3 {
            font-size: 16px;
            margin: 13px 0 5px;
        }

        .step p {
            margin: 0;
            color: var(--muted);
            font-size: 13px;
        }

        footer {
            padding: 24px 0 35px;
            border-top: 1px solid var(--border);
            text-align: center;
            color: var(--muted);
            font-size: 12px;
        }

        footer p {
            margin: 4px 0;
        }

        @media (max-width: 760px) {
            .hero {
                grid-template-columns: 1fr;
                padding: 32px 24px;
            }

            .hero-art {
                min-height: 170px;
            }

            .orbit {
                width: 160px;
                height: 160px;
            }

            .hero-icon {
                width: 112px;
                height: 112px;
                font-size: 50px;
            }

            .simulator {
                grid-template-columns: 1fr;
            }

            .result-card {
                position: static;
            }

            .steps {
                grid-template-columns: 1fr;
            }

            .card,
            .result-card {
                padding: 21px;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                scroll-behavior: auto !important;
                transition-duration: .01ms !important;
            }
        }
    </style>
</head>

<body>
    <div class="ambient ambient-one"></div>
    <div class="ambient ambient-two"></div>

    <div class="container">
        <header>
            <div class="logo">ミライ<span>買い。</span></div>
            <div class="header-note">YOUR FUTURE, YOUR CHOICE.</div>
        </header>

        <section class="hero">
            <div>
                <span class="eyebrow">THINK BEFORE YOU BUY</span>
                <h1>買う前に、<br><span>未来を見る。</span></h1>
                <p>
                    その買い物に、どれくらいの時間が必要？
                    どれくらい使う予定？
                    買う前に、未来のコストを考えてみよう。
                </p>
                <a href="#simulator" class="button">
                    購入シミュレーション ↓
                </a>
            </div>

            <div class="hero-art" aria-hidden="true">
                <div class="orbit"></div>
                <div class="hero-icon">🛍️</div>
            </div>
        </section>

        <div class="section-heading" id="simulator">
            <h2>購入シミュレーション</h2>
            <p>数字を入力すると、未来のコストが変わります。</p>
        </div>

        <section class="simulator">
            <div class="card">
                <h3>購入前に考えてみよう</h3>
                <p class="muted">商品情報と使用予定を入力してください。</p>

                <!--
                Later, connect this form to a Laravel POST route.
                File uploads need multipart/form-data.
            -->

                <form id="purchaseForm" action="{{ route('wishlist.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="field">
                        <label for="itemName">商品名</label>
                        <input id="itemName" name="item_name" type="text" maxlength="150" placeholder="例：スニーカー"
                            required>
                    </div>

                    <div class="field">
                        <label for="productImage">商品写真（任意）</label>
                        <input id="productImage" name="product_image" type="file"
                            accept="image/jpeg,image/png,image/webp,image/gif">

                        <div class="hint">
                            JPG・PNG・WebP・GIF形式の画像を選べます。
                        </div>
                    </div>

                    <div class="photo-preview" id="photoPreview">
                        <img id="previewImage" alt="選択した商品のプレビュー">
                        <div class="photo-caption" id="photoCaption"></div>
                    </div>

                    <div class="field">
                        <label for="price">商品価格（円）</label>
                        <input id="price" name="price" type="number" min="1" max="100000000"
                            step="1" placeholder="18000" required>
                    </div>

                    <div class="field">
                        <label for="wage">あなたの時給（円）</label>
                        <input id="wage" name="hourly_wage" type="number" min="1" max="10000000"
                            step="1" placeholder="1200" required>
                    </div>

                    <div class="two-columns">
                        <div class="field">
                            <label for="weeklyUses">週の使用回数</label>
                            <input id="weeklyUses" name="weekly_uses" type="number" min="1" max="1000"
                                step="1" placeholder="2" required>
                        </div>

                        <div class="field">
                            <label for="weeks">予想期間（週）</label>
                            <input id="weeks" name="period_weeks" type="number" min="1" max="520"
                                step="1" placeholder="4" required>
                        </div>
                    </div>

                    <!-- 欲しい物に登録 -->
                    <button type="submit">
                        ♥ 欲しい物に追加する
                    </button>

                    <!-- 購入済みに登録 -->
                    <button type="submit" formaction="{{ route('purchaseitems.store') }}">
                        商品を購入する
                    </button>

                </form>

            </div>

            <div class="result-card" id="resultCard" aria-live="polite" aria-atomic="true">

                <span class="result-label">YOUR FUTURE COST</span>
                <h3 class="result-name" id="resultName">
                    あなたのシミュレーション
                </h3>

                <div class="result-photo" id="resultPhoto">
                    <img id="resultImage" alt="シミュレーション対象の商品">
                </div>

                <div class="main-result">
                    <small>この買い物に必要な労働時間</small>
                    <strong class="big-number" id="workHours">-- 時間</strong>
                </div>

                <div class="metrics">
                    <div class="metric">
                        <small>予想使用回数</small>
                        <strong id="totalUses">-- 回</strong>
                    </div>

                    <div class="metric">
                        <small>1回あたりのコスト</small>
                        <strong id="costPerUse">-- 円</strong>
                    </div>
                </div>

                <div class="progress-track" id="progressTrack" role="progressbar" aria-label="入力状況"
                    aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                    <div class="progress-bar" id="progressBar"></div>
                </div>

                <p class="result-message" id="resultMessage">
                    商品情報を入力して、未来のコストを確認しましょう。
                </p>
            </div>
        </section>

       

    <script>
        const form = document.getElementById('purchaseForm');

        const fields = {
            name: document.getElementById('itemName'),
            image: document.getElementById('productImage'),
            price: document.getElementById('price'),
            wage: document.getElementById('wage'),
            weeklyUses: document.getElementById('weeklyUses'),
            weeks: document.getElementById('weeks')
        };

        const output = {
            name: document.getElementById('resultName'),
            hours: document.getElementById('workHours'),
            uses: document.getElementById('totalUses'),
            cost: document.getElementById('costPerUse'),
            message: document.getElementById('resultMessage'),
            card: document.getElementById('resultCard'),
            bar: document.getElementById('progressBar'),
            track: document.getElementById('progressTrack')
        };

        const preview = {
            box: document.getElementById('photoPreview'),
            image: document.getElementById('previewImage'),
            caption: document.getElementById('photoCaption'),
            resultBox: document.getElementById('resultPhoto'),
            resultImage: document.getElementById('resultImage')
        };

        const yen = new Intl.NumberFormat('ja-JP', {
            maximumFractionDigits: 0
        });

        let imageUrl = null;

        // Preview the selected product image.
        fields.image.addEventListener('change', function() {
            const file = this.files[0];

            if (!file) {
                clearImagePreview();
                return;
            }

            const allowedTypes = [
                'image/jpeg',
                'image/png',
                'image/webp',
                'image/gif'
            ];

            // Basic client-side checks. Laravel must validate uploads too.
            if (!allowedTypes.includes(file.type)) {
                alert('JPG、PNG、WebP、GIF形式の画像を選んでください。');
                this.value = '';
                clearImagePreview();
                return;
            }

            const maxSize = 5 * 1024 * 1024;

            if (file.size > maxSize) {
                alert('画像は5MB以下にしてください。');
                this.value = '';
                clearImagePreview();
                return;
            }

            if (imageUrl) {
                URL.revokeObjectURL(imageUrl);
            }

            imageUrl = URL.createObjectURL(file);

            preview.image.src = imageUrl;
            preview.resultImage.src = imageUrl;
            preview.caption.textContent = file.name;

            preview.box.classList.add('visible');
            preview.resultBox.classList.add('visible');
        });

        function clearImagePreview() {
            if (imageUrl) {
                URL.revokeObjectURL(imageUrl);
                imageUrl = null;
            }

            preview.image.removeAttribute('src');
            preview.resultImage.removeAttribute('src');
            preview.caption.textContent = '';

            preview.box.classList.remove('visible');
            preview.resultBox.classList.remove('visible');
        }

        function calculate() {
            const name = fields.name.value.trim();
            const price = Number(fields.price.value);
            const wage = Number(fields.wage.value);
            const weeklyUses = Number(fields.weeklyUses.value);
            const weeks = Number(fields.weeks.value);

            const validNumbers =
                Number.isFinite(price) &&
                Number.isFinite(wage) &&
                Number.isFinite(weeklyUses) &&
                Number.isFinite(weeks) &&
                price > 0 &&
                wage > 0 &&
                weeklyUses > 0 &&
                weeks > 0 &&
                Number.isInteger(price) &&
                Number.isInteger(weeklyUses) &&
                Number.isInteger(weeks);

            const progress = Object.values(fields)
                .filter(field => field.type === 'file' ?
                    field.files.length > 0 :
                    field.value.trim() !== '')
                .length / Object.keys(fields).length * 100;

            output.bar.style.width = progress + '%';
            output.track.setAttribute(
                'aria-valuenow',
                String(Math.round(progress))
            );

            if (!name || !validNumbers) {
                output.name.textContent =
                    name || 'あなたのシミュレーション';
                output.hours.textContent = '-- 時間';
                output.uses.textContent = '-- 回';
                output.cost.textContent = '-- 円';
                output.message.textContent =
                    '商品名と正しい数値を入力すると結果が表示されます。';
                return;
            }

            const hours = price / wage;
            const totalUses = weeklyUses * weeks;
            const cost = price / totalUses;

            output.name.textContent = name;

            output.hours.textContent =
                hours.toLocaleString('ja-JP', {
                    maximumFractionDigits: 1
                }) + ' 時間';

            output.uses.textContent = yen.format(totalUses) + ' 回';

            output.cost.textContent =
                '¥' + yen.format(Math.round(cost));

            output.message.textContent =
                'この予想を保存して、購入後の実際の使用回数と比べてみましょう。';

            output.card.classList.remove('updated');
            void output.card.offsetWidth;
            output.card.classList.add('updated');
        }

        // Recalculate as the user changes values.
        Object.values(fields).forEach(field => {
            field.addEventListener('input', calculate);
        });

        const calculateButton = document.getElementById('calculateButton');

        calculateButton.addEventListener('click', function() {
            if (!form.reportValidity()) return;

            calculate();

            output.card.scrollIntoView({
                behavior: 'smooth',
                block: 'nearest'
            });
        });
    </script>
</body>

</html>
