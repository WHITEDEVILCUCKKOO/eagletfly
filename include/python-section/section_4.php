<!-- ================= CURRICULUM SECTION ================= -->
<section class="py-curriculum-section">

    <div class="py-curriculum-top">
        <div>
            <span class="py-curriculum-label">CURRICULUM</span>
            <h2 class="py-curriculum-title">4 modules</h2>
        </div>

        <a href="#" class="py-syllabus-btn">
            Download Full Syllabus
        </a>
    </div>


    <div class="py-module-list">

        <!-- Module 01 -->
        <div class="py-module-item">
            <button class="py-module-header" type="button">
                <span class="py-module-number">01</span>

                <span class="py-module-name">
                    Introduction To Python
                </span>

                <span class="py-module-icon">+</span>
            </button>

            <div class="py-module-content">
                <p>
                    Introduction to Python programming, its features,
                    applications, syntax and basic programming concepts.
                </p>
            </div>
        </div>


        <!-- Module 02 -->
        <div class="py-module-item">
            <button class="py-module-header" type="button">
                <span class="py-module-number">02</span>

                <span class="py-module-name">
                    Writing and Executing First Python Program
                </span>

                <span class="py-module-icon">+</span>
            </button>

            <div class="py-module-content">
                <p>
                    Learn how to write, save and execute your first Python
                    program along with basic input and output operations.
                </p>
            </div>
        </div>


        <!-- Module 03 -->
        <div class="py-module-item">
            <button class="py-module-header" type="button">
                <span class="py-module-number">03</span>

                <span class="py-module-name">
                    Python Language Fundamentals
                </span>

                <span class="py-module-icon">+</span>
            </button>

            <div class="py-module-content">
                <p>
                    Understand variables, data types, operators, strings,
                    lists, tuples, dictionaries and other Python fundamentals.
                </p>
            </div>
        </div>


        <!-- Module 04 -->
        <div class="py-module-item">
            <button class="py-module-header" type="button">
                <span class="py-module-number">04</span>

                <span class="py-module-name">
                    Python Conditional Statements
                </span>

                <span class="py-module-icon">+</span>
            </button>

            <div class="py-module-content">
                <p>
                    Learn conditional logic using if, elif and else statements
                    to create decision-based Python programs.
                </p>
            </div>
        </div>

    </div>

</section>


<style>
/* ================= CURRICULUM ================= */

.py-curriculum-section {
    width: 80%;
    margin: 80px auto;
    font-family: Arial, sans-serif;
}

.py-curriculum-top {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    margin-bottom: 32px;
}

.py-curriculum-label {
    display: block;
    margin-bottom: 14px;
    color: #286cff;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1.5px;
}

.py-curriculum-title {
    margin: 0;
    color: #092653;
    font-size: 44px;
    line-height: 1;
    font-weight: 800;
}

.py-syllabus-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 40px;
    padding: 0 20px;
    border-radius: 8px;
    background: #ff7217;
    color: #fff;
    text-decoration: none;
    font-size: 13px;
    font-weight: 700;
    transition: 0.3s ease;
}

.py-syllabus-btn:hover {
    background: #e9610b;
}


/* ================= MODULE ================= */

.py-module-list {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.py-module-item {
    overflow: hidden;
    border: 1px solid #dce1e8;
    border-radius: 10px;
    background: #fff;
}

.py-module-header {
    width: 100%;
    min-height: 66px;
    padding: 0 22px;
    border: 0;
    background: transparent;
    display: flex;
    align-items: center;
    gap: 16px;
    cursor: pointer;
    text-align: left;
}

.py-module-number {
    width: 37px;
    height: 24px;
    border-radius: 6px;
    background: #edf3ff;
    color: #3476ff;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    font-size: 14px;
    font-weight: 700;
}

.py-module-name {
    color: #071f43;
    font-size: 15px;
    font-weight: 700;
    flex: 1;
}

.py-module-icon {
    width: 25px;
    height: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #315577;
    font-size: 19px;
    font-weight: 400;
    transition: transform 0.3s ease;
}

.py-module-content {
    max-height: 0;
    overflow: hidden;
    padding: 0 22px;
    transition: max-height 0.35s ease, padding 0.35s ease;
}

.py-module-content p {
    margin: 0;
    padding-left: 53px;
    padding-bottom: 20px;
    color: #667085;
    font-size: 14px;
    line-height: 1.7;
}

.py-module-item.active .py-module-icon {
    transform: rotate(45deg);
}

.py-module-item.active .py-module-content {
    max-height: 150px;
}


/* ================= RESPONSIVE ================= */

@media (max-width: 768px) {

    .py-curriculum-section {
        width: 90%;
        margin: 50px auto;
    }

    .py-curriculum-top {
        align-items: flex-start;
        gap: 25px;
        flex-direction: column;
    }

    .py-curriculum-title {
        font-size: 36px;
    }

    .py-syllabus-btn {
        min-height: 42px;
    }

    .py-module-header {
        min-height: 62px;
        padding: 0 14px;
        gap: 11px;
    }

    .py-module-name {
        font-size: 14px;
        line-height: 1.4;
    }

    .py-module-content p {
        padding-left: 0;
    }
}

@media (max-width: 480px) {

    .py-curriculum-title {
        font-size: 32px;
    }

    .py-module-number {
        width: 34px;
        height: 23px;
        font-size: 12px;
    }

    .py-module-name {
        font-size: 13px;
    }
}
</style>


<script>
document.querySelectorAll(".py-module-header").forEach(function (button) {

    button.addEventListener("click", function () {

        const currentItem = this.closest(".py-module-item");

        document.querySelectorAll(".py-module-item").forEach(function (item) {
            if (item !== currentItem) {
                item.classList.remove("active");
            }
        });

        currentItem.classList.toggle("active");

    });

});
</script>