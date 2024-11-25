<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>アンケートフォーム</title>

</head>
<body>
    <form method="post" action="insert.php">
        <div class="form-row">
            <label for="q1" class="form-label">Q1: 弊社サービスに対する満足度を教えてください。</label>
            <select id="q1" name="q1">
                <option value="非常に満足">非常に満足</option>
                <option value="やや満足">やや満足</option>
                <option value="どちらともいえない">どちらともいえない</option>
                <option value="やや不満">やや不満</option>
                <option value="非常に不満">非常に不満</option>
            </select>
        </div>

        <div class="form-row">
            <label for="q2" class="form-label">Q2: Q1のように回答された理由をお聞かせください。</label>
            <textarea id="q2" name="q2" rows="4" placeholder="理由を入力してください"></textarea>
        </div>

        <div class="form-row">
            <h3>Q3: 弊社サービスの次の点について満足度を教えてください。</h3>

            <!-- 質問① -->
            <div class="question-group">
                <p class="question-title">① 品質の良さ</p>
                <div class="options">
                    <label><input type="radio" name="q3_1" value="非常に満足"> 非常に満足</label><br>
                    <label><input type="radio" name="q3_1" value="やや満足"> やや満足</label><br>
                    <label><input type="radio" name="q3_1" value="どちらともいえない"> どちらともいえない</label><br>
                    <label><input type="radio" name="q3_1" value="やや不満"> やや不満</label><br>
                    <label><input type="radio" name="q3_1" value="非常に不満"> 非常に不満</label>
                </div>
            </div>

            <!-- 質問② -->
            <div class="question-group">
                <p class="question-title">② 使いやすさ</p>
                <div class="options">
                    <label><input type="radio" name="q3_2" value="非常に満足"> 非常に満足</label><br>
                    <label><input type="radio" name="q3_2" value="やや満足"> やや満足</label><br>
                    <label><input type="radio" name="q3_2" value="どちらともいえない"> どちらともいえない</label><br>
                    <label><input type="radio" name="q3_2" value="やや不満"> やや不満</label><br>
                    <label><input type="radio" name="q3_2" value="非常に不満"> 非常に不満</label>
                </div>
            </div>

            <!-- 質問③ -->
            <div class="question-group">
                <p class="question-title">③ 価格</p>
                <div class="options">
                    <label><input type="radio" name="q3_3" value="非常に満足"> 非常に満足</label><br>
                    <label><input type="radio" name="q3_3" value="やや満足"> やや満足</label><br>
                    <label><input type="radio" name="q3_3" value="どちらともいえない"> どちらともいえない</label><br>
                    <label><input type="radio" name="q3_3" value="やや不満"> やや不満</label><br>
                    <label><input type="radio" name="q3_3" value="非常に不満"> 非常に不満</label>
                </div>
            </div>

            <!-- 質問④ -->
            <div class="question-group">
                <p class="question-title">④ お客様サポート</p>
                <div class="options">
                    <label><input type="radio" name="q3_4" value="非常に満足"> 非常に満足</label><br>
                    <label><input type="radio" name="q3_4" value="やや満足"> やや満足</label><br>
                    <label><input type="radio" name="q3_4" value="どちらともいえない"> どちらともいえない</label><br>
                    <label><input type="radio" name="q3_4" value="やや不満"> やや不満</label><br>
                    <label><input type="radio" name="q3_4" value="非常に不満"> 非常に不満</label>
                </div>
            </div>
        </div>

        <div class="form-row">
            <label for="q4" class="form-label">Q4: 弊社サービスを友人や家族に勧めたいと思いますか。</label>
            <select id="q4" name="q4">
                <option value="非常にそう思う">非常にそう思う</option>
                <option value="ややそう思う">ややそう思う</option>
                <option value="どちらともいえない">どちらともいえない</option>
                <option value="あまりそう思わない">あまりそう思わない</option>
                <option value="まったくそう思わない">まったくそう思わない</option>
            </select>
        </div>

        <div class="form-row">
            <label for="q5" class="form-label">Q5: Q4のように回答された理由をお聞かせください。</label>
            <textarea id="q5" name="q5" rows="4" placeholder="理由を入力してください"></textarea>
        </div>

        <div class="form-row">
            <label for="q6" class="form-label">Q6: 弊社サービスについて満足な点・ご不満な点などご自由にお聞かせください。</label>
            <textarea id="q6" name="q6" rows="4" placeholder="ご意見を入力してください"></textarea>
        </div>

        <div class="form-row">
            <label for="name" class="form-label">お名前:</label>
            <input type="text" id="name" name="name" placeholder="お名前を入力してください">
        </div>

        <!-- <div class="form-row">
            <label for="age" class="form-label">年齢:</label>
            <input type="number" id="age" name="age" placeholder="年齢を入力してください">
        </div> -->

        <!-- <div class="form-row">
            <label for="age" class="form-label">年齢:</label>
            <input type="number" id="age" name="age" placeholder="年齢を入力してください" min="18" max="100">
        </div> -->

        <div class="form-row">
            <label for="age" class="form-label">年齢</label>
            <select id="age" name="age">
                <option value="10代">10代</option>
                <option value="20代">20代</option>
                <option value="30代">30代</option>
                <option value="40代">40代</option>
                <option value="50代">50代</option>
                <option value="60代">60代</option>
                <option value="70代">70代</option>
            </select>
        </div>
        

        <div class="form-row">
            <label for="gender" class="form-label">性別:</label>
            <select id="gender" name="gender">
                <option value="男性">男性</option>
                <option value="女性">女性</option>
            </select>
        </div>

        <div class="form-row">
            <label for="source" class="form-label">弊社サービスを知ったきっかけ:</label>
            <select id="source" name="source">
                <option value="Webサイト">Webサイト</option>
                <option value="SNS">SNS</option>
                <option value="検索エンジン">検索エンジン</option>
                <option value="知人の紹介">知人の紹介</option>
                <option value="その他">その他</option>
            </select>
        </div>

        <div class="form-row">
            <label for="frequency" class="form-label">弊社サービスのご利用頻度:</label>
            <select id="frequency" name="frequency">
                <option value="1週間に1回以上">1週間に1回以上</option>
                <option value="1ヶ月に1回以上">1ヶ月に1回以上</option>
                <option value="半年に1回以上">半年に1回以上</option>
                <option value="その他">その他</option>
            </select>
        </div>

        <button type="submit">送信</button>
        </form>
</body>
</html>