<form style="background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); padding: 20px; width: 300px;">
    <label style="display: block; margin-bottom: 8px; font-weight: bold;">Name:</label>
    <input type="text" id="name" name="name" readonly style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">

    <label style="display: block; margin-bottom: 8px; font-weight: bold;">Email:</label>
    <input type="email" id="email" name="email" readonly style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">

    <!-- Add the rest of the fields similarly -->

    <label style="display: block; margin-bottom: 8px; font-weight: bold;">Message:</label>
    <textarea id="message" name="message" rows="4" readonly style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; resize: vertical;"></textarea>
</form>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Readonly Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical; /* Allow vertical resizing of textarea */
        }

        input[readonly],
        textarea[readonly] {
            background-color: #eee; /* Grey background for readonly fields */
            cursor: not-allowed; /* Disable cursor for readonly fields */
        }
    </style>
</head>
<body>

<form>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" readonly>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" readonly>

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" readonly>

    <label for="moveFrom">Move From:</label>
    <input type="text" id="moveFrom" name="moveFrom" readonly>

    <label for="moveTo">Move To:</label>
    <input type="text" id="moveTo" name="moveTo" readonly>

    <label for="transportType">Transport Type:</label>
    <input type="text" id="transportType" name="transportType" readonly>

    <label for="transportDate">Transport Date:</label>
    <input type="date" id="transportDate" name="transportDate" readonly>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" readonly></textarea>
</form>

</body>
</html> -->

<!-- 
 -->

  <!-- Intro Section -->

<!--   
 <section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="FAQ"><span>Quote View</span></h1>
      		<div class="page-breadcrumb">
    				<a href="{{route('welcome')}}">Home</a>/ <span>Quote View</span>
    			</div>
      	</div>
      </div>
    </div>
</section>

<div id="services-section" class="pt-80 pt-xs-60">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
       <div class="container"> -->
        <!-- <div class="row text-center mb-30">
          <div class="col-sm-12">
            <div class="sec_hedding">
              <h2><span>Quick</span> Quote</h2>
              <span class="b-line"></span>
            </div>
          </div>
        </div> -->
<!--         <div class="row">

          <div class="col-md-12" style="background-color: black; padding: 20px">
              <div class="row">
                <div class="col-md-12 ">
                  <div class="form-field">
                    <input class="input-sm form-full" id="name" type="hidden" name="form-service-id" placeholder="service-id" value="" readonly="readonly">
                  </div>

                  <div class="form-field">
                    <input class="input-sm form-full" id="name" type="text" name="form-name" placeholder="Full Name" readonly="readonly">
                  </div>
                </div>
              </div>
              <div class="row">
                 <div class="col-md-6 ">
                  <div class="form-field">
                    <input class="input-sm form-full" id="email" type="text" name="form-email" placeholder="Email" readonly="readonly">
                  </div>
                </div>
                 <div class="col-md-6  ">
                  <div class="form-field">
                    <input class="input-sm form-full" id="sub" type="text" name="form-phone" placeholder="Phone" readonly="readonly">
                  </div>
                </div>
              </div>
               
              
              <div class="row">
               
                <div class="col-md-6  ">
                  <div class="form-field">
                    <input class="input-sm form-full" id="sub" type="text" name="form-move-from" placeholder="Move From" readonly="readonly">
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="form-field">
                    <input class="input-sm form-full" id="sub" type="text" name="form-Move-to" placeholder="Move to" readonly="readonly">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 ">
                  <div class="form-field">
                    <input class="input-sm form-full" id="sub" type="text" name="form-trasport-type" placeholder="Transport Type" readonly="readonly">
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="form-field">
                    <input class="input-sm form-full" id="sub" type="date" name="form-date" placeholder="Date" min="{{date('Y-m-d')}}" readonly="readonly">
                  </div>
                </div>
              </div> 
              <div class="row"> 
                <div class="col-md-12 ">
                  <div class="form-field">
                    <textarea class="form-full" id="message" rows="7" name="form-message" placeholder="Your Message" readonly="readonly"></textarea>
                  </div>
                </div>
              </div>
            </div>

        </div>

      </div>
        
      </div>

</div>
</div>
</div>
<br>
<br> 
<style>
  div{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
</style>
