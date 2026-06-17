<section class="p-entry">
  <div class="p-entry__inner">
    <div class="p-entry__form-box">

      <div class="p-entry__header">
        <span class="p-entry__sub-title">Entry Form</span>
        <h2 class="p-entry__title"><span class="u-text__block">新卒・中途採用</span>エントリーフォーム</h2>
      </div>

      <p class="p-entry__lead-text">
        当社へ入社ご希望の方は、下記の送信フォームより送信して下さい。<br>
        <span aria-hidden="true">※</span>は必須項目になります。
      </p>

      <div class="p-entry__form">
        <div class="p-entry__table">

          <div class="p-entry__row">
            <div class="p-entry__label">
              <label for="entry-name">お名前<span aria-hidden="true">※</span></label>
            </div>
            [text* your-name id:entry-name class:p-entry__input autocomplete:name placeholder "例：山田太郎"]
          </div>

          <div class="p-entry__row">
            <div class="p-entry__label">
              <label for="entry-kana">お名前カナ<span aria-hidden="true">※</span></label>
            </div>
            [text* your-kana id:entry-kana class:p-entry__input placeholder "例：ヤマダタロウ"]
          </div>

          <div class="p-entry__row">
            <div class="p-entry__label">
              <label for="entry-email">メールアドレス<span aria-hidden="true">※</span></label>
            </div>
            [email* your-email id:entry-email class:p-entry__input autocomplete:email placeholder "例：tetote@gmail.com"]
          </div>

          <div class="p-entry__row">
            <div class="p-entry__label">
              <label for="entry-tel">電話番号<span aria-hidden="true">※</span></label>
            </div>
            [tel* your-tel id:entry-tel class:p-entry__input autocomplete:tel placeholder "例：00-0000-0000"]
          </div>

          <div class="p-entry__row" data-status="birthday">
            <div class="p-entry__label">
              <label for="birth-year">生年月日<span aria-hidden="true">※</span></label>
            </div>
            <div class="p-entry__date-item">
              [text* birth-year id:birth-year class:p-entry__input class:p-entry__input--year placeholder "例：2000"]
              <span class="p-entry__date-unit">年</span>
            </div>
          </div>

          <div class="p-entry__row">
            <div class="p-entry__label"></div>
            <div class="p-entry__date-item">
              <div class="p-entry__date-pair">
                <div class="p-entry__select-wrap">
                  <svg aria-hidden="true" focusable="false" width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="0.353553" y1="0.646447" x2="5.35355" y2="5.64645" stroke="black"/>
                    <line x1="11.3536" y1="0.353553" x2="5.35355" y2="6.35355" stroke="black"/>
                  </svg>
                  [select* birth-month class:p-entry__input class:p-entry__select first_as_label "選択してください" "1" "2" "3" "4" "5" "6" "7" "8" "9" "10" "11" "12"]
                </div>
                <span class="p-entry__date-unit">月</span>
              </div>
              <div class="p-entry__date-pair">
                <div class="p-entry__select-wrap">
                  <svg aria-hidden="true" focusable="false" width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="0.353553" y1="0.646447" x2="5.35355" y2="5.64645" stroke="black"/>
                    <line x1="11.3536" y1="0.353553" x2="5.35355" y2="6.35355" stroke="black"/>
                  </svg>
                  [select* birth-day class:p-entry__input class:p-entry__select first_as_label "選択してください" "1" "2" "3" "4" "5" "6" "7" "8" "9" "10" "11" "12" "13" "14" "15" "16" "17" "18" "19" "20" "21" "22" "23" "24" "25" "26" "27" "28" "29" "30" "31"]
                </div>
                <span class="p-entry__date-unit">日</span>
              </div>
            </div>
          </div>

          <div class="p-entry__row" data-status="desired-position" role="group" aria-labelledby="label-job-type">
            <div class="p-entry__label">
              <span id="label-job-type">希望職種<span aria-hidden="true">※</span></span>
            </div>
            <div class="p-entry__radio-group">
              [radio job-type class:p-entry__radio-control use_label_element default:1 "コンサルタント" "ソリューション営業" "システムエンジニア"]
            </div>
          </div>

          <div class="p-entry__row" data-status="self-pr">
            <div class="p-entry__label">
              <label for="entry-pr">自己PR<span aria-hidden="true">※</span></label>
            </div>
            [textarea* your-pr id:entry-pr class:p-entry__textarea placeholder "例：志望動機、自己PR"]
          </div>

          <div class="p-entry__row" data-status="referral-source" role="group" aria-labelledby="label-trigger">
            <div class="p-entry__label">
              <span id="label-trigger">当社を知った<br>きっかけを教えて下さい。</span>
            </div>
            <div class="p-entry__checkbox-group">
              [checkbox trigger class:p-entry__checkbox-control use_label_element "X(旧Twitter)" "Facebook" "Instagram" "検索広告" "知人友人・親戚" "その他"]
            </div>
          </div>
        </div>

        <div class="p-entry__acceptance">
          <label for="acceptance" class="p-entry__acceptance-checkbox">
            [acceptance acceptance optional id:acceptance class:p-entry__acceptance-input]
            <span>個人情報保護方針に同意する</span>
          </label>
          <div class="p-entry__submit">
            [submit class:c-button-submit "送信する"]
          </div>
        </div>
      </div>

    </div>
  </div>
</section>