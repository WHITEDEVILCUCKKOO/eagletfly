  <style>
        .roles-wrap {
            box-sizing: border-box;
            background: #FFFFFF;
            padding: 96px 8vw;
            /* font-family: 'Inter', sans-serif; */
        }

        .roles-wrap * {
            box-sizing: border-box;
        }

        .roles-head {
            max-width: 640px;
            margin: 0 auto 40px;
        }

        .roles-title {
            /* font-family: 'Space Grotesk', sans-serif; */
            font-weight: 600;
            font-size: clamp(24px, 3vw, 32px);
            color: #14172B;
            margin: 0 0 10px;
        }

        .roles-desc {
            font-size: 15px;
            color: #5B5F73;
            margin: 0;
        }

        .roles-table-wrap {
            max-width: 900px;
            margin: 0 auto;
            overflow-x: auto;
        }

        .roles-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14.5px;
        }

        .roles-table thead th {
            text-align: left;
            /* font-family: 'JetBrains Mono', monospace; */
            font-size: 12px;
            color: #767B94;
            padding: 12px 16px;
            border-bottom: 2px solid #14172B;
        }

        .roles-table tbody td {
            padding: 16px;
            border-bottom: 1px solid #E4E0D6;
            color: #14172B;
        }

        .roles-table tbody tr {
            opacity: 0;
            transform: translateY(10px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .roles-table tbody tr.roles-in {
            opacity: 1;
            transform: translateY(0);
        }

        .roles-role {
            font-weight: 600;
        }

        .roles-range {
            /* font-family: 'JetBrains Mono', monospace; */
            color: #0E9C8A;
        }
    </style>

    <section class="roles-wrap">
        <div class="roles-head">
            <h2 class="roles-title">Roles our learners move into</h2>
            <p class="roles-desc">Indicative average salary ranges reported by learners after completing the program.</p>
        </div>
        <div class="roles-table-wrap">
            <table class="roles-table" id="roles-target">
                <thead>
                    <tr>
                        <th>Role</th>
                        <th>Entry-level (LPA)</th>
                        <th>Average (LPA)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="roles-role">Data Analyst</td>
                        <td class="roles-range">3 – 5</td>
                        <td class="roles-range">5 – 8</td>
                    </tr>
                    <tr>
                        <td class="roles-role">Machine Learning Engineer</td>
                        <td class="roles-range">5 – 8</td>
                        <td class="roles-range">10 – 16</td>
                    </tr>
                    <tr>
                        <td class="roles-role">Business Intelligence Developer</td>
                        <td class="roles-range">4 – 6</td>
                        <td class="roles-range">7 – 10</td>
                    </tr>
                    <tr>
                        <td class="roles-role">Data Engineer</td>
                        <td class="roles-range">5 – 7</td>
                        <td class="roles-range">9 – 14</td>
                    </tr>
                    <tr>
                        <td class="roles-role">Data Scientist</td>
                        <td class="roles-range">6 – 9</td>
                        <td class="roles-range">12 – 18</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <script>
        (function() {
            var rows = document.querySelectorAll('#roles-target tbody tr');
            var obs = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry, i) {
                    if (entry.isIntersecting) {
                        setTimeout(function() {
                            entry.target.classList.add('roles-in');
                        }, i * 70);
                        obs.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.2
            });
            rows.forEach(function(r) {
                obs.observe(r);
            });
        })();
    </script>

