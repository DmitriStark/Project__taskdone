<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard UI</title>
  <link rel="stylesheet" href="css/style.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    rel="stylesheet" />

  <!-- Link to the sidebar CSS -->
</head>

<body>
  <div class="dashboard">
    <button class="mobile-menu-toggle" onclick="toggleMobileMenu()">☰</button>
    <div class="sidebar">
      <div class="profile">
        <img src="./assets/profile.jpeg" alt="Profile Icon" />
        <div class="name">John Doe</div>
        <div class="status">Art Director <i class="fa fa-solid fa-angle-left collapsed" id="arrow-icon"></i>
        </div>
        <!-- Status info -->
      </div>
      <!-- Dashboard Section -->
      <div class="section open">
        <h3 class="section-title open" onclick="toggleSection(this)">
          <img
            class="section-icon"
            src="./assets/dashboardicon.bmp"
            alt="icon" />
          Dashboard
          <i class="fa fa-solid fa-angle-left" id="arrow-icon"></i>
        </h3>
        <div class="section-content">
          <ul>
            <li><a href="#">Dashboard v.1</a></li>
            <li><a style="color: #fff;" href="#">Dashboard v.2</a></li>
            <li><a href="#">Dashboard v.3</a></li>
            <li><a href="#">Dashboard v.4</a></li>
            <li><a href="#">Dashboard v.5</a></li>
          </ul>
        </div>
      </div>

      <div class="section">
        <h3 class="section-title" onclick="toggleSection(this)">
          <img
            class="section-icon"
            src="./assets/layoutsicon.bmp"
            alt="icon" />
          Layouts
        </h3>
        <div class="section-content"></div>
      </div>
      <div class="section">
        <h3 class="section-title" onclick="toggleSection(this)">
          <img class="section-icon" src="./assets/graphicon.bmp" alt="icon" />
          Graphs
          <i class="fa fa-solid fa-angle-left" id="arrow-icon"></i>
        </h3>
        <div class="section-content"></div>
      </div>

      <div class="section">
        <h3
          style="display: flex; justify-content: space-between"
          class="section-title"
          onclick="toggleSection(this)">
          <p>
            <img
              class="section-icon"
              src="./assets/mailicon.bmp"
              alt="icon" />
            Mailbox
          </p>
          <span class="new-badge"
            style="
                background-color: orange;
                border-radius: 3px;
                color: white;
                display: inline-block;
                padding: 4px 4px; /* Adjust padding to make it more square */
                font-size: 12px; /* Adjust font size for proper alignment */
              ">16/24</span>
        </h3>
        <div class="section-content">
          <ul>
            <li><a href="#">Inbox</a></li>
            <li><a href="#">Sent</a></li>
            <li><a href="#">Draft</a></li>
            <li><a href="#">Spam</a></li>
          </ul>
        </div>
      </div>

      <div class="section">
        <h3 class="section-title" onclick="toggleSection(this)">
          <img
            class="section-icon"
            src="./assets//metricicon.bmp"
            alt="icon" />
          Metrics
        </h3>
        <div class="section-content">
          <ul>
            <li><a href="#">Metric 1</a></li>
            <li><a href="#">Metric 2</a></li>
            <li><a href="#">Metric 3</a></li>
          </ul>
        </div>
      </div>

      <div class="section">
        <h3 class="section-title" onclick="toggleSection(this)">
          <img
            class="section-icon"
            src="./assets/widgeticon.bmp"
            alt="icon" />
          Widgets
        </h3>
        <div class="section-content">
          <ul>
            <li><a href="#">Widget 1</a></li>
            <li><a href="#">Widget 2</a></li>
            <li><a href="#">Widget 3</a></li>
          </ul>
        </div>
      </div>

      <div class="section">
        <h3 class="section-title" onclick="toggleSection(this)">
          <img class="section-icon" src="./assets/formsicon.bmp" alt="icon" />
          Forms
          <i class="fa fa-solid fa-angle-left" id="arrow-icon"></i>
        </h3>
        <div class="section-content">
          <ul>
            <li><a href="#">Form 1</a></li>
            <li><a href="#">Form 2</a></li>
            <li><a href="#">Form 3</a></li>
          </ul>
        </div>
      </div>

      <div class="section">
        <h3
          style="display: flex; justify-content: space-between"
          class="section-title"
          onclick="toggleSection(this)">
          <p>
            <img
              class="section-icon"
              src="./assets/appviewicon.bmp"
              alt="icon" />
            App Views
          </p>
          <span class="new-badge"
            style="
                background-color: aquamarine;
                border-radius: 3px;
                color: white;
                display: inline-block;
                padding: 4px 4px; /* Adjust padding to make it more square */
                font-size: 12px; /* Adjust font size for proper alignment */
              ">SPECIAL</span>
        </h3>
        <div class="section-content">
          <ul>
            <li><a href="#">App View 1</a></li>
            <li><a href="#">App View 2</a></li>
            <li><a href="#">App View 3</a></li>
          </ul>
        </div>
      </div>

      <div class="section">
        <h3 class="section-title" onclick="toggleSection(this)">
          <img
            class="section-icon"
            src="./assets/otherpagesicon.bmp"
            alt="icon" />
          Other Pages
          <i class="fa fa-solid fa-angle-left" id="arrow-icon"></i>
        </h3>
        <div class="section-content">
          <ul>
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
          </ul>
        </div>
      </div>

      <div class="section">
        <h3
          style="display: flex; justify-content: space-between"
          class="section-title"
          onclick="toggleSection(this)">
          <p>
            <img
              class="section-icon"
              src="./assets/missicon.bmp"
              alt="icon" />
            Miscellaneous
          </p>

          <span class="new-badge"
            style="
                background-color: aqua;
                border-radius: 3px;
                color: white;
                display: inline-block;
                padding: 4px 6px; /* Adjust padding to make it more square */
                font-size: 12px; /* Adjust font size for proper alignment */
              ">NEW</span>
        </h3>
        <div class="section-content">
          <ul>
            <li><a href="#">Element 1</a></li>
            <li><a href="#">Element 2</a></li>
            <li><a href="#">Element 3</a></li>
          </ul>
        </div>
      </div>
      <div class="section">
        <h3 class="section-title" onclick="toggleSection(this)">
          <img class="section-icon" src="./assets/uieleicon.bmp" alt="icon" />
          UI Elements
          <i class="fa fa-solid fa-angle-left" id="arrow-icon"></i>
        </h3>
        <div class="section-content">
          <ul>
            <li><a href="#">Element 1</a></li>
            <li><a href="#">Element 2</a></li>
            <li><a href="#">Element 3</a></li>
          </ul>
        </div>
      </div>

      <div class="section">
        <h3 class="section-title" onclick="toggleSection(this)">
          <img class="section-icon" src="./assets/Gridoicon.bmp" alt="icon" />
          Grid Options
        </h3>
        <div class="section-content">
          <ul>
            <li><a href="#">Option 1</a></li>
            <li><a href="#">Option 2</a></li>
            <li><a href="#">Option 3</a></li>
          </ul>
        </div>
      </div>

      <div class="section">
        <h3 class="section-title" onclick="toggleSection(this)">
          <img class="section-icon" src="./assets/Gridoicon.bmp" alt="icon" />
          Tablets
          <i class="fa fa-solid fa-angle-left" id="arrow-icon"></i>
        </h3>
        <div class="section-content">
          <ul>
            <li><a href="#">Tablet 1</a></li>
            <li><a href="#">Tablet 2</a></li>
            <li><a href="#">Tablet 3</a></li>
          </ul>
        </div>
      </div>

      <div class="section">
        <h3 class="section-title" onclick="toggleSection(this)">
          <img
            class="section-icon"
            src="./assets/ecomerceicon.bmp"
            alt="icon" />
          E-commerce
          <i class="fa fa-solid fa-angle-left" id="arrow-icon"></i>
        </h3>
        <div class="section-content">
          <ul>
            <li><a href="#">Product 1</a></li>
            <li><a href="#">Product 2</a></li>
            <li><a href="#">Product 3</a></li>
          </ul>
        </div>
      </div>

      <div class="section">
        <h3 class="section-title" onclick="toggleSection(this)">
          <img
            class="section-icon"
            src="./assets/galleryicon.bmp"
            alt="icon" />
          Gallery
          <i class="fa fa-solid fa-angle-left" id="arrow-icon"></i>
        </h3>
        <div class="section-content">
          <ul>
            <li><a href="#">Gallery 1</a></li>
            <li><a href="#">Gallery 2</a></li>
            <li><a href="#">Gallery 3</a></li>
          </ul>
        </div>
      </div>

      <div class="section">
        <h3 class="section-title" onclick="toggleSection(this)">
          <img
            class="section-icon"
            src="./assets/menulevelsicon.bmp"
            alt="icon" />
          Menu Levels
          <i class="fa fa-solid fa-angle-left" id="arrow-icon"></i>
        </h3>
        <div class="section-content">
          <ul>
            <li><a href="#">Level 1</a></li>
            <li><a href="#">Level 2</a></li>
            <li><a href="#">Level 3</a></li>
          </ul>
        </div>
      </div>

      <div class="section">
        <h3
          style="display: flex; justify-content: space-between"
          class="section-title"
          onclick="toggleSection(this)">
          <p>
            <img
              class="section-icon"
              src="./assets/animationicon.bmp"
              alt="icon" />
            Animations
          </p>

          <span class="new-badge"
            style="
                background-color: aqua;
                border-radius: 3px;
                color: white;
                display: inline-block;
                padding: 4px 6px; /* Adjust padding to make it more square */
                font-size: 12px; /* Adjust font size for proper alignment */
              ">62</span>
        </h3>
        <div class="section-content">
          <ul>
            <li><a href="#">Animation 1</a></li>
            <li><a href="#">Animation 2</a></li>
            <li><a href="#">Animation 3</a></li>
          </ul>
        </div>
      </div>

      <div class="section landingselection">
        <h3
          style="display: flex; justify-content: space-between"
          class="section-title"
          onclick="toggleSection(this)">
          <p>

            <img
              class="section-icon"
              src="./assets/landingpageicon.bmp"
              alt="icon" />
            Landing Page
          </p>

          <span class="new-badge"
            style="
                background-color: #fff;
                border-radius: 3px;
                color: aquamarine;
                display: inline-block;
                padding: 4px 6px; /* Adjust padding to make it more square */
                font-size: 12px; /* Adjust font size for proper alignment */
              ">New</span>
        </h3>
        <div class="section-content">
          <ul>
            <li><a href="#">Landing Page 1</a></li>
            <li><a href="#">Landing Page 2</a></li>
            <li><a href="#">Landing Page 3</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="top-bar">
        <div class="card">
          <div class="header">
            <p>Income</p>
            <span class="monthlyspan">Monthly</span>
          </div>
          <div>
            <p>40 886,20</p>
            <div>
              <span>Total income</span><span class="percentagofspan1">98%<img
                  style="width: 10px"
                  class="progress-img"
                  src="./assets/pottersign.bmp"
                  alt="potter sign" /></span>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="header">
            <p>Orders</p>
            <span class="anual-span">Anual</span>
          </div>
          <div>
            <p>275,800</p>
            <div>
              <span>New orders</span><span class="percentagofspan2">20%<img
                  style="width: 10px"
                  class="progress-img"
                  src="./assets/uparrow.bmp"
                  alt="uparrow" /></span>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="header">
            <p>Vistits</p>
            <span class="visitors-span">Today</span>
          </div>
          <div>
            <p>106,120</p>
            <div>
              <span>New visits</span><span class="percentagofspan3">44%<img
                  style="width: 10px"
                  class="progress-img"
                  src="./assets/uparrow.bmp"
                  alt="uparrow" /></span>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="header">
            <p>User Activity</p>
            <span class="activity-span">Low value</span>
          </div>
          <div>
            <p>80,600</p>
            <div>
              <span>In first month</span><span class="percentagofspan4">38%<img
                  style="width: 10px"
                  class="progress-img"
                  src="./assets/redarrowdown.bmp"
                  alt="downarrow" /></span>
            </div>
          </div>
        </div>
      </div>

      <div class="otionabso"><img src="./assets/optionicon.bmp" alt="optionicon"></div>

      <div class="graphs">
        <div class="headergraph">
          <h3 class="orders">Orders</h3>
          <div class="icons">
            <button>Today</button>
            <button>Monthly</button>
            <button>Anual</button>
          </div>
        </div>
        <div class="graphContent">
          <div class="image-container">
            <img src="./assets/orders.bmp" alt="Orders Graph" />
          </div>
          <div class="progress-bars">
            <div class="progress-bar">
              <span class="graph-amout">2,346</span>
              <div class="progress-label">
                <span class="label">Total Orders in Period</span>
                <span class="label2">60%<img
                    style="width: 10px"
                    class="progress-img"
                    src="./assets/uparrow.bmp"
                    alt="up arrow" /></span>
              </div>

              <div class="bar">
                <div class="fill" style="width: 48%"></div>
              </div>
            </div>
            <div class="progress-bar">
              <span class="graph-amout">4,422</span>
              <div class="progress-label">
                <span class="label">Orders in Last Month </span>
                <span class="label2">60%<img
                    style="width: 10px"
                    class="progress-img"
                    src="./assets/downarrow.bmp"
                    alt="down arrow" /></span>
              </div>
              <div class="bar">
                <div class="fill" style="width: 60%"></div>
              </div>
            </div>
            <div class="progress-bar">
              <span class="graph-amout">9,180</span>
              <div class="progress-label">
                <span class="label">Monthly Income from Orders</span>
                <span class="label2">60%<img
                    style="width: 10px"
                    class="progress-img"
                    src="./assets/pottersign.bmp"
                    alt="potter sign" /></span>
              </div>
              <div class="bar">
                <div class="fill" style="width: 22%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="dashboard-content">
        <div class="messageCon">
          <div>
            <div class="titlemessage" style="background-color: white">
              <h1>Messages</h1>
              <div>
                <img src="./assets/messagesarrow icon.bmp" alt="icon" />
                <img src="./assets/messagetoolicon.bmp" alt="icon" />
                <img src="./assets/messagecloseicon.bmp" alt="icon" />
              </div>
            </div>
            <div class="messageheader">
              <div class="titleheader">
                <img src="./assets/messageheader.bmp" alt="message header" class="header-image" />
                <h1>New Messages</h1>
              </div>
              <div>
                <p class="titleheaderp">
                  You have {{ $messages->count() }} new messages and 16 waiting in the draft folder.
                </p>
              </div>
            </div>
            <div class="messages">
              @foreach($messages->reverse() as $index => $message)
              <div class="message">
                <div class="mestitname">
                  <h2>{{ $message->message_title }}</h2>
                  <p style="color: {{ $loop->first ? 'green' : 'initial' }}">
                    @if($message->message_time)
                    {{ \Carbon\Carbon::parse($message->message_time)->diffForHumans() }}
                    @else
                    {{ __('No date available') }}
                    @endif
                  </p>
                </div>
                <p class="message-body">
                  {{ $message->message_body }}
                </p>
                <p class="message-time">
                  <!-- Optionally, display the full date and time -->
                  <span>
                    @if ($message->message_time)
                    @php
                    $messageTime = \Carbon\Carbon::parse($message->message_time);
                    $now = \Carbon\Carbon::now();
                    @endphp
                    @if ($messageTime->isToday())
                    Today {{ $messageTime->format('h:i A') }}
                    @elseif ($messageTime->isYesterday())
                    Yesterday {{ $messageTime->format('h:i A') }}
                    @else
                    {{ $messageTime->format('h:i A') }}  <span>{{ $messageTime->format('d.m.Y') }}</span>
                    @endif
                    @else
                    N/A
                    @endif
                    <span>- {{ $message->message_time ? \Carbon\Carbon::parse($message->message_time)->format('d.m.Y') : 'N/A' }}</span>

                  </span>
                </p>

              </div>
              @endforeach
            </div>





          </div>
        </div>

        <div>
          <div class="side-content">
            <div class="top-row">
              <div class="user-projects">
                <div
                  class="userproject-header"
                  style="background-color: white">
                  <h1>User projects list</h1>
                  <div>
                    <img src="./assets/messagesarrow icon.bmp" alt="icon" />
                    <img src="./assets/messagetoolicon.bmp" alt="icon" />
                    <img src="./assets/messagecloseicon.bmp" alt="icon" />
                  </div>
                </div>

                <!-- Table for displaying user project details -->
                <table>
                  <thead>
                    <tr>
                      <th>Status</th>
                      <th>Date</th>
                      <th>User</th>
                      <th>Values</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="project-row">
                      <td>Pending...</td>
                      <td>
                        <img
                          src="./assets/watchicon.bmp"
                          alt="watch icon" /><span>11:20<span>pm</span></span>
                      </td>
                      <td>Samantha</td>
                      <td>
                        <img src="./assets/uparrow.bmp" alt="arrowUp" /><span>24%</span>
                      </td>
                    </tr>
                    <tr class="project-row">
                      <td>
                        <span
                          style="
                              background-color: orange;
                              border-radius: 3px;
                              color: white;
                              display: inline-block;
                              padding: 4px 8px; /* Adjust padding to make it more square */
                              font-size: 12px; /* Adjust font size for proper alignment */
                            ">Canceled</span>
                      </td>
                      <td>
                        <img
                          src="./assets/watchicon.bmp"
                          alt="watch icon" /><span>10:40<span>am</span></span>
                      </td>
                      <td>Monica</td>
                      <td>
                        <img src="./assets/uparrow.bmp" alt="arrowUp" /><span>66%</span>
                      </td>
                    </tr>
                    <tr class="project-row">
                      <td style="border-radius: 3px">Pending...</td>
                      <td>
                        <img
                          src="./assets/watchicon.bmp"
                          alt="watch icon" /><span>01:30<span>pm</span></span>
                      </td>
                      <td>john</td>
                      <td>
                        <img src="./assets/uparrow.bmp" alt="arrowUp" /><span>54%</span>
                      </td>
                    </tr>
                    <tr class="project-row">
                      <td style="border-radius: 3px">Pending...</td>
                      <td>
                        <img
                          src="./assets/watchicon.bmp"
                          alt="watch icon" /><span>02:20<span>pm</span></span>
                      </td>
                      <td>Agnes</td>
                      <td>
                        <img src="./assets/uparrow.bmp" alt="arrowUp" /><span>12%</span>
                      </td>
                    </tr>
                    <tr class="project-row">
                      <td>
                        <span
                          style="
                              background-color: green;
                              border-radius: 3px;
                              color: white;
                              display: inline-block;
                              padding: 4px 8px; /* Adjust padding to make it more square */
                              font-size: 12px; /* Adjust font size for proper alignment */
                            ">Complete</span>
                      </td>
                      <td>
                        <img
                          src="./assets/watchicon.bmp"
                          alt="watch icon" /><span>04:10<span>am</span></span>
                      </td>
                      <td>Amelia</td>
                      <td>
                        <img src="./assets/uparrow.bmp" alt="arrowUp" /><span>66%</span>
                      </td>
                    </tr>
                    <tr class="project-row">
                      <td style="border-radius: 3px">Pending...</td>
                      <td>
                        <img
                          src="./assets/watchicon.bmp"
                          alt="watch icon" /><span>12:18<span>am</span></span>
                      </td>
                      <td>Damian</td>
                      <td>
                        <img src="./assets/uparrow.bmp" alt="arrowUp" /><span>23%</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="todo-list">
                <div class="Todolist-header">
                  <h1>Small to do list</h1>
                  <div>
                    <img src="./assets/messagesarrow icon.bmp" alt="icon" />
                    <img src="./assets/messagetoolicon.bmp" alt="icon" />
                    <img src="./assets/messagecloseicon.bmp" alt="icon" />
                  </div>
                </div>
                <div class="todoList-contain">
                  <div class="todo">
                    <input
                      type="checkbox"
                      id="task1"
                      class="todo-checkbox"
                      checked />
                    <h2 class="todo-text">Buy milk</h2>
                  </div>
                  <div class="todo">
                    <input type="checkbox" id="task1" class="todo-checkbox" />
                    <h2 class="todo-text">
                      Go to Shop and Find some Products.
                    </h2>
                  </div>
                  <div class="todo">
                    <input type="checkbox" id="task1" class="todo-checkbox" />
                    <h2 class="todo-text">
                      Send documents to Mike
                      <span style="background-color: rgb(100, 196, 5)"> <img
                          src="./assets/round clock.bmp"
                          alt="watch icon"
                          style="background-color: green;" />1min ago</span>
                    </h2>
                  </div>
                  <div class="todo">
                    <input
                      type="checkbox"
                      id="task1"
                      class="todo-checkbox"
                      checked />
                    <h2 class="todo-text">Go to doctor dr.smith</h2>
                  </div>
                  <div class="todo">
                    <input type="checkbox" id="task1" class="todo-checkbox" />
                    <h2 class="todo-text">Plan vacation</h2>
                  </div>
                  <div class="todo">
                    <input type="checkbox" id="task1" class="todo-checkbox" />
                    <h2 class="todo-text">Create new stuff</h2>
                  </div>
                  <div class="todo">
                    <input type="checkbox" id="task1" class="todo-checkbox" />
                    <h2 class="todo-text">Call to Anna for dinner</h2>
                  </div>
                </div>
              </div>
            </div>

            <div class="transactions">
              <div class="transaction-header">
                <h1>Transactions Worldwide</h1>
              </div>
              <div class="image-container">
                <img src="./assets/wordwide.bmp" alt="Worldwide image" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function toggleSection(element) {
      const title = element.closest(".section-title");
      const section = element.closest(".section");
      const sectionContent = section.querySelector(".section-content");
      const arrowIcon = section.querySelector("#arrow-icon");

      // Toggle visibility of content
      if (
        sectionContent.style.display === "none" ||
        sectionContent.style.display === ""
      ) {
        sectionContent.style.display = "block"; // Show the content
        section.classList.add("open"); // Add green line and open state
        title.classList.add("open");
        arrowIcon.classList.remove("collapsed"); // Rotate arrow down
      } else {
        sectionContent.style.display = "none"; // Hide the content
        section.classList.remove("open"); // Remove green line and open state
        title.classList.remove("open");
        arrowIcon.classList.add("collapsed"); // Rotate arrow up
      }
    }

    function toggleMobileMenu() {
      const sidebar = document.querySelector(".sidebar");
      sidebar.classList.toggle("active");
    }

    // Close sidebar when clicking outside
    document.addEventListener("click", function(event) {
      const sidebar = document.querySelector(".sidebar");
      const mobileMenuToggle = document.querySelector(".mobile-menu-toggle");

      if (
        !sidebar.contains(event.target) &&
        event.target !== mobileMenuToggle
      ) {
        sidebar.classList.remove("active");
      }
    });
  </script>
</body>

</html>