<fieldset id="first">
                <h2 class="title">Personal Details</h2>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstname">First Name *</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname" >
                    </div>
                    <div class="col-md-6">
                        <label for="lastname">Last Name *</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname" required >
                    </div>
                </div>

                <div class="form-row">
                        <label for="dob">Birth Month *</label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="gender">I am  *</label>
                        <select class="form-control" id="gender" name="gender" required>
                            <option value="">--Select--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="seeking"><strong>Seeking A</strong> *</label>
                        <select class="form-control" id="seeking" name="seeking" required>
                        <option value="">--Select--</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="email">Height *</label>
                        <select name="height" class="form-control" id="height" required>
                                <option value="">Feet/Inches</option>
                                <option value="4' 0'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="4' 0'") selected="" @endif>4' 0"</option>
                                <option value="4' 1'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="4' 1'") selected="" @endif>4' 1"</option>
                                <option value="4' 2'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="4' 2'") selected="" @endif>4' 2"</option>
                                <option value="4' 3'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="4' 3'") selected="" @endif>4' 3"</option>
                                <option value="4' 4'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="4' 4'") selected="" @endif>4' 4"</option>
                                <option value="4' 5'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="4' 5'") selected="" @endif>4' 5"</option>
                                <option value="4' 6'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="4' 6'") selected="" @endif>4' 6"</option>
                                <option value="4' 7'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="4' 7'") selected="" @endif>4' 7"</option>
                                <option value="4' 8'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="4' 8'") selected="" @endif>4' 8"</option>
                                <option value="4' 9'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="4' 9'") selected="" @endif>4' 9"</option>
                                <option value="4' 10'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="4' 10'") selected="" @endif>4' 10"</option>
                                <option value="4' 11'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="4' 11'") selected="" @endif>4' 11"</option>
                                <option value="5' 0'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="5' 0'") selected="" @endif>5' 0"</option>
                                <option value="5' 1'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="5' 1'") selected="" @endif>5' 1"</option>
                                <option value="5' 2'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="5' 2'") selected="" @endif>5' 2"</option>
                                <option value="5' 3'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="5' 3'") selected="" @endif>5' 3"</option>
                                <option value="5' 4'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="5' 4'") selected="" @endif>5' 4"</option>
                                <option value="5' 5'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="5' 5'") selected="" @endif>5' 5"</option>
                                <option value="5' 6'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="5' 6'") selected="" @endif>5' 6"</option>
                                <option value="5' 7'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="5' 7'") selected="" @endif>5' 7"</option>
                                <option value="5' 8'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="5' 8'") selected="" @endif>5' 8"</option>
                                <option value="5' 9'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="5' 9'") selected="" @endif>5' 9"</option>
                                <option value="5' 10'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="5' 10'") selected="" @endif>5' 10"</option>
                                <option value="5' 11'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="5' 11'") selected="" @endif>5' 11"</option>
                                <option value="6' 0'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="6' 0'") selected="" @endif>6' 0"</option>
                                <option value="6' 1'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="6' 1'") selected="" @endif>6' 1"</option>
                                <option value="6' 2'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="6' 2'") selected="" @endif>6' 2"</option>
                                <option value="6' 3'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="6' 3'") selected="" @endif>6' 3"</option>
                                <option value="6' 4'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="6' 4'") selected="" @endif>6' 4"</option>
                                <option value="6' 5'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="6' 5'") selected="" @endif>6' 5"</option>
                                <option value="6' 6'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="6' 6'") selected="" @endif>6' 6"</option>
                                <option value="6' 7'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="6' 7'") selected="" @endif>6' 7"</option>
                                <option value="6' 8'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="6' 8'") selected="" @endif>6' 8"</option>
                                <option value="6' 9'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="6' 9'") selected="" @endif>6' 9"</option>
                                <option value="6' 10'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="6' 10'") selected="" @endif>6' 10"</option>
                                <option value="6' 11'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="6' 11'") selected="" @endif>6' 11"</option>
                                <option value="7' 0'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="7' 0'") selected="" @endif>7' 0"</option>
                                <option value="7' 1'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="7' 1'") selected="" @endif>7' 1"</option>
                                <option value="7' 2'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="7' 2'") selected="" @endif>7' 2"</option>
                                <option value="7' 3'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="7' 3'") selected="" @endif>7' 3"</option>
                                <option value="7' 4'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="7' 4'") selected="" @endif>7' 4"</option>
                                <option value="7' 5'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="7' 5'") selected="" @endif>7' 5"</option>
                                <option value="7' 6'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="7' 6'") selected="" @endif>7' 6"</option>
                                <option value="7' 7'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="7' 7'") selected="" @endif>7' 7"</option>
                                <option value="7' 8'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="7' 8'") selected="" @endif>7' 8"</option>
                                <option value="7' 9'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="7' 9'") selected="" @endif>7' 9"</option>
                                <option value="7' 10'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="7' 10'") selected="" @endif>7' 10"</option>
                                <option value="7' 11'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="7' 11'") selected="" @endif>7' 11"</option>
                                <option value="8' 0'" @if(!empty($datingProfile['height']) && $datingProfile['height']=="8' 0'") selected="" @endif>8' 0"</option>
                            </select>
                    </div>

                            <div class="form-group col-md-4">
                                <label for="marital_status">Marital_status*</label>
                                <select name="marital_status" class="form-control" id="marital_status" required>
                                        <option value="">Select</option>
                                        <option value="Unmarried" @if(!empty($datingProfile['marital_status']) && $datingProfile['marital_status']=="Unmarried") selected="" @endif>Unmarried</option>
                                        <option value="Married"  @if(!empty($datingProfile['marital_status']) && $datingProfile['marital_status']=="Married") selected="" @endif>Married</option>
                                        <option value="Divorced"  @if(!empty($datingProfile['marital_status']) && $datingProfile['marital_status']=="Divorced") selected="" @endif>Divorced</option>
                                        <option value="Widowed"  @if(!empty($datingProfile['marital_status']) && $datingProfile['marital_status']=="Widowed") selected="" @endif>Widowed</option>
                                        <option value="Seperated"  @if(!empty($datingProfile['marital_status']) && $datingProfile['marital_status']=="Seperated") selected="" @endif>Seperated</option>
                                        <option value="Annulled"  @if(!empty($datingProfile['marital_status']) && $datingProfile['marital_status']=="Annulled") selected="" @endif>Annulled</option>
                                        <option value="Other"  @if(!empty($datingProfile['marital_status']) && $datingProfile['marital_status']=="Other") selected="" @endif>Other</option>
                                    </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="body_type">Body_Type *</label>
                                <select name="body_type" class="form-control" id="body_type" required>
                                        <option value="">--Select--</option>
                                        <option value="Slim" @if(!empty($datingProfile['body_type']) && $datingProfile['body_type']=="Slim") selected="" @endif>Slim</option>
                                        <option value="Average" @if(!empty($datingProfile['body_type']) && $datingProfile['body_type']=="Average") selected="" @endif>Average</option>
                                        <option value="Athletic" @if(!empty($datingProfile['body_type']) && $datingProfile['body_type']=="Athletic") selected="" @endif>Athletic</option>
                                        <option value="Heavy" @if(!empty($datingProfile['body_type']) && $datingProfile['body_type']=="Heavy") selected="" @endif>Heavy</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="city">City *</label>
                                    <input autocomplete="off" id="city" name="city" @if(!empty($datingProfile['city'])) value="{{ $datingProfile['city'] }}" @endif type="text" class="form-control" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="state"><strong>State</strong> *</label>
                                    <input autocomplete="off" id="state" name="state" @if(!empty($datingProfile['state'])) value="{{ $datingProfile['state'] }}" @endif type="text"  class="form-control" />
                                </div>
                        </div>

                        <div class="form-row">

                                <label for="country">Country *</label>
                                <select name="country" class="form-control" id="country">
                                        <option value="">Select</option>
                                        @foreach($countries as $country)
                                        <option value="{{ $country->country_name }}" @if(!empty($datingProfile['country']) && $datingProfile['country']==$country->coutry_name) selected="" @endif>{{ $country->country_name }}</option>
                                        @endforeach
                                </select>
                        </div>
                        <div class="form-row">
                            <label for="language"> Languages *</label>
                            <select name="languages" class="form-control" id="language">
                                    <option value="">--Select--</option>
                                    @foreach($languages as $language)

                                    <option value="{{ $language->name }}" <?php if(!empty($datingProfile->languages) && preg_match('/'.$language->name.'/i', $datingProfile->languages)){ echo "selected"; } ?>>{{ $language->name }}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="phone">Phone *</label>
                                  <input name="phone" class="form-control" type="number" id="phone">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="image">Upload Image File *</label>
                                    <input name="image" class="form-control" type="file"  id="image">
                                </div>
                            </div>
                            <div class="form-row">
                                    <div class="form-group col-md-8">
                                      <label for="relation-ship">How important in a relationship is my partner's dependability ? *</label>
                                      <select name="partnerDependability" id="relation-ship" class="form-control" required>
                                            <option value="">--Select--</option>
                                            <option value="Very Important">Very Important</option>
                                            <option value="Somewhat Important">Somewhat Important</option>
                                            <option value="What every happen">What every happen</option>
                                            <option value="Unsure">Unsure</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="occupation">Your Occupation *</label>
                                      <select class="form-control chosen-select" style="background-color:#fffdfd73;" id="occupation" name="occupation">
                                            <option value="">-Select-</option>
                                            <option value="Abstractor">	Abstractor</option>
                                            <option value="Accounting technician">	Accounting technician</option>
                                            <option value="Actor/actress">	Actor/actress</option>
                                            <option value="Actuary">	Actuary</option>
                                            <option value="Acupuncturist">	Acupuncturist</option>
                                            <option value="Advertising account manager">	Advertising account manager</option>
                                            <option value="Advertising copywriter">	Advertising copywriter</option>
                                            <option value="Advice worker">	Advice worker</option>
                                            <option value="Aeronautical engineer">	Aeronautical engineer</option>
                                            <option value="Agricultural consultant/adviser">	Agricultural consultant/adviser</option>
                                            <option value="Aid worker/humanitarian worker">	Aid worker/humanitarian worker</option>
                                            <option value="Air cabin crew">	Air cabin crew</option>
                                            <option value="Air traffic controller">	Air traffic controller</option>
                                            <option value="Airline pilot">	Airline pilot</option>
                                            <option value="Analytical chemist">	Analytical chemist</option>
                                            <option value="Animal breeder">	Animal breeder</option>
                                            <option value="Animator">	Animator</option>
                                            <option value="Antiques dealer">	Antiques dealer</option>
                                            <option value="Arboriculturalist">	Arboriculturalist</option>
                                            <option value="Archaeologist">	Archaeologist</option>
                                            <option value="Architect">	Architect</option>
                                            <option value="Archivist">	Archivist</option>
                                            <option value="Aromatherapist">	Aromatherapist</option>
                                            <option value="Art gallery manager">	Art gallery manager</option>
                                            <option value="Arts administrator">	Arts administrator</option>
                                            <option value="Arts agent/promoter">	Arts agent/promoter</option>
                                            <option value="Arts therapist">	Arts therapist</option>
                                            <option value="Audiologist">	Audiologist</option>
                                            <option value="Auditor">	Auditor</option>
                                            <option value="Automotive engineer">	Automotive engineer</option>
                                            <option value="Banker, commercial/corporate lending">	Banker, commercial/corporate lending</option>
                                            <option value="Banker, investment, corporate finance">	Banker, investment, corporate finance</option>
                                            <option value="Barrister">	Barrister</option>
                                            <option value="Betting shop manager">	Betting shop manager</option>
                                            <option value="Bilingual secretary">	Bilingual secretary</option>
                                            <option value="Biochemical engineer">	Biochemical engineer</option>
                                            <option value="Biochemist">	Biochemist</option>
                                            <option value="Biomedical engineer">	Biomedical engineer</option>
                                            <option value="Biomedical scientist">	Biomedical scientist</option>
                                            <option value="Biotechnologist">	Biotechnologist</option>
                                            <option value="Bookseller">	Bookseller</option>
                                            <option value="Broadcaster">	Broadcaster</option>
                                            <option value="Building services engineer">	Building services engineer</option>
                                            <option value="Building surveyor">	Building surveyor</option>
                                            <option value="Call centre manager">	Call centre manager</option>
                                            <option value="Careers adviser">	Careers adviser</option>
                                            <option value="Cartographer">	Cartographer</option>
                                            <option value="Catering manager">	Catering manager</option>
                                            <option value="Charity officer">	Charity officer</option>
                                            <option value="Chartered accountant">	Chartered accountant</option>
                                            <option value="Chartered Loss Adjuster">	Chartered Loss Adjuster</option>
                                            <option value="Chemical development engineer">	Chemical development engineer</option>
                                            <option value="Chiropractor">	Chiropractor</option>
                                            <option value="Choreographer">	Choreographer</option>
                                            <option value="Cinema manager">	Cinema manager</option>
                                            <option value="Civil engineer">	Civil engineer</option>
                                            <option value="Civil service administrator/manager">	Civil service administrator/manager</option>
                                            <option value="Clerical assistant">	Clerical assistant</option>
                                            <option value="Clinical cytogeneticist">	Clinical cytogeneticist</option>
                                            <option value="Clinical researcher">	Clinical researcher</option>
                                            <option value="Clothing/textile technologist">	Clothing/textile technologist</option>
                                            <option value="Commissioning engineer">	Commissioning engineer</option>
                                            <option value="Commodity broker">	Commodity broker</option>
                                            <option value="Communications engineer">	Communications engineer</option>
                                            <option value="Community arts worker">	Community arts worker</option>
                                            <option value="Community education officer">	Community education officer</option>
                                            <option value="Community welfare officer">	Community welfare officer</option>
                                            <option value="Community worker/community development worker">	Community worker/community development worker</option>
                                            <option value="Community/retail pharmacist">	Community/retail pharmacist</option>
                                            <option value="Company secretary">	Company secretary</option>
                                            <option value="Composer">	Composer</option>
                                            <option value="Conference/event organiser">	Conference/event organiser</option>
                                            <option value="Conservator/restorer">	Conservator/restorer</option>
                                            <option value="Consulting engineer">	Consulting engineer</option>
                                            <option value="Counsellor">	Counsellor</option>
                                            <option value="Credit analyst">	Credit analyst</option>
                                            <option value="Curator">	Curator</option>
                                            <option value="Customs officer">	Customs officer</option>
                                            <option value="Database administrator">	Database administrator</option>
                                            <option value="Defence forces">	Defence forces</option>
                                            <option value="Dentist">	Dentist</option>
                                            <option value="Designer, industrial products">	Designer, industrial products</option>
                                            <option value="Designer/maker">	Designer/maker</option>
                                            <option value="Dietician/nutritionist">	Dietician/nutritionist</option>
                                            <option value="Diplomat">	Diplomat</option>
                                            <option value="Doctor/GP">	Doctor/GP</option>
                                            <option value="Economist">	Economist</option>
                                            <option value="Editor">	Editor</option>
                                            <option value="Electrical engineer">	Electrical engineer</option>
                                            <option value="Electronic engineer">	Electronic engineer</option>
                                            <option value="Emergency medical technician (paramedic)">	Emergency medical technician (paramedic)</option>
                                            <option value="Engineer, manufacturing and production">	Engineer, manufacturing and production</option>
                                            <option value="Engineer, quality">	Engineer, quality</option>
                                            <option value="Environmental health officer">	Environmental health officer</option>
                                            <option value="Ergonomist">	Ergonomist</option>
                                            <option value="Estate agent">	Estate agent</option>
                                            <option value="Exhibition organiser/event manager">	Exhibition organiser/event manager</option>
                                            <option value="Farm manager">	Farm manager</option>
                                            <option value="Fashion designer">	Fashion designer</option>
                                            <option value="Field trials officer">	Field trials officer</option>
                                            <option value="Film/TV producer">	Film/TV producer</option>
                                            <option value="Financial accountant">	Financial accountant</option>
                                            <option value="Financial regulator">	Financial regulator</option>
                                            <option value="Fine artist">	Fine artist</option>
                                            <option value="Firefighter">	Firefighter</option>
                                            <option value="Fitness/leisure centre manager">	Fitness/leisure centre manager</option>
                                            <option value="Forensic scientist">	Forensic scientist</option>
                                            <option value="Forestry management">	Forestry management</option>
                                            <option value="Fundraising manager (charity)">	Fundraising manager (charity)</option>
                                            <option value="Furniture designer">	Furniture designer</option>
                                            <option value="Geologist, engineering">	Geologist, engineering</option>
                                            <option value="Geophysicist, exploration">	Geophysicist, exploration</option>
                                            <option value="Graphic designer">	Graphic designer</option>
                                            <option value="Guidance counsellor, second level">	Guidance counsellor, second level</option>
                                            <option value="Health and safety inspector">	Health and safety inspector</option>
                                            <option value="Health education/promotion officer">	Health education/promotion officer</option>
                                            <option value="Horticultural consultant">	Horticultural consultant</option>
                                            <option value="Hotel manager">	Hotel manager</option>
                                            <option value="Housing manager/officer">	Housing manager/officer</option>
                                            <option value="Human resources manager">	Human resources manager</option>
                                            <option value="Illustrator">	Illustrator</option>
                                            <option value="Immigration officer, passport control">	Immigration officer, passport control</option>
                                            <option value="Information officer">	Information officer</option>
                                            <option value="Insurance broker, sales">	Insurance broker, sales</option>
                                            <option value="Interior designer">	Interior designer</option>
                                            <option value="Interpreter">	Interpreter</option>
                                            <option value="Investment fund administrator">	Investment fund administrator</option>
                                            <option value="Investment fund manager">	Investment fund manager</option>
                                            <option value="IT project manager">	IT project manager</option>
                                            <option value="Journalist">	Journalist</option>
                                            <option value="Lecturer, third level">	Lecturer, third level</option>
                                            <option value="Legal executive">	Legal executive</option>
                                            <option value="Librarian">	Librarian</option>
                                            <option value="Loss adjuster, chartered">	Loss adjuster, chartered</option>
                                            <option value="Make-up artist">	Make-up artist</option>
                                            <option value="Management accountant">	Management accountant</option>
                                            <option value="Management consultant">	Management consultant</option>
                                            <option value="Manager, health service">	Manager, health service</option>
                                            <option value="Market researcher">	Market researcher</option>
                                            <option value="Marketing executive">	Marketing executive</option>
                                            <option value="Mechanical engineer">	Mechanical engineer</option>
                                            <option value="Media buyer/planner">	Media buyer/planner</option>
                                            <option value="Medical laboratory scientist">	Medical laboratory scientist</option>
                                            <option value="Meteorologist">	Meteorologist</option>
                                            <option value="Microbiologist, clinical">	Microbiologist, clinical</option>
                                            <option value="Midwife">	Midwife</option>
                                            <option value="Multimedia designer">	Multimedia designer</option>
                                            <option value="Museum education officer">	Museum education officer</option>
                                            <option value="Nature conservation officer">	Nature conservation officer</option>
                                            <option value="Network engineer">	Network engineer</option>
                                            <option value="Nurse">	Nurse</option>
                                            <option value="Occupational hygienist">	Occupational hygienist</option>
                                            <option value="Occupational psychologist">	Occupational psychologist</option>
                                            <option value="Occupational therapist">	Occupational therapist</option>
                                            <option value="Oceanographer">	Oceanographer</option>
                                            <option value="Optometrist">	Optometrist</option>
                                            <option value="Patent agent/examiner">	Patent agent/examiner</option>
                                            <option value="Personal assistant/secretary">	Personal assistant/secretary</option>
                                            <option value="Petroleum engineer">	Petroleum engineer</option>
                                            <option value="Pharmacist (hospital)">	Pharmacist (hospital)</option>
                                            <option value="Pharmacologist">	Pharmacologist</option>
                                            <option value="Photographer">	Photographer</option>
                                            <option value="Physicist">	Physicist</option>
                                            <option value="Physiotherapist">	Physiotherapist</option>
                                            <option value="Picture researcher/editor">	Picture researcher/editor</option>
                                            <option value="Police officer/An Garda Síochána">	Police officer/An Garda Síochána</option>
                                            <option value="Political lobbyist">	Political lobbyist</option>
                                            <option value="Presenter, radio and television">	Presenter, radio and television</option>
                                            <option value="Print production manager/assistant">	Print production manager/assistant</option>
                                            <option value="Printmaker">	Printmaker</option>
                                            <option value="Prison officer">	Prison officer</option>
                                            <option value="Probation and welfare officer">	Probation and welfare officer</option>
                                            <option value="Production manager/planner">	Production manager/planner</option>
                                            <option value="Programmer/software developer">	Programmer/software developer</option>
                                            <option value="Psychologist, clinical">	Psychologist, clinical</option>
                                            <option value="Psychologist, educational">	Psychologist, educational</option>
                                            <option value="Psychologist, sports">	Psychologist, sports</option>
                                            <option value="Psychotherapist">	Psychotherapist</option>
                                            <option value="Public relations officer">	Public relations officer</option>
                                            <option value="Quality assurance manager">	Quality assurance manager</option>
                                            <option value="Quantity surveyor">	Quantity surveyor</option>
                                            <option value="Radio production">	Radio production</option>
                                            <option value="Radiographer, diagnostic">	Radiographer, diagnostic</option>
                                            <option value="Radiographer, therapeutic">	Radiographer, therapeutic</option>
                                            <option value="Records manager">	Records manager</option>
                                            <option value="Recruitment consultant">	Recruitment consultant</option>
                                            <option value="Recycling/waste disposal officer">	Recycling/waste disposal officer</option>
                                            <option value="Retail banker">	Retail banker</option>
                                            <option value="Retail buyer">	Retail buyer</option>
                                            <option value="Retail manager">	Retail manager</option>
                                            <option value="Retail merchandiser">	Retail merchandiser</option>
                                            <option value="Risk manager">	Risk manager</option>
                                            <option value="Sales executive">	Sales executive</option>
                                            <option value="Scientist, industrial R&D">	Scientist, industrial R&D</option>
                                            <option value="Scientist, quality control">	Scientist, quality control</option>
                                            <option value="Scientist, research">	Scientist, research</option>
                                            <option value="Social researcher">	Social researcher</option>
                                            <option value="Social worker">	Social worker</option>
                                            <option value="Soil scientist">	Soil scientist</option>
                                            <option value="Solicitor">	Solicitor</option>
                                            <option value="Speech and language therapist">	Speech and language therapist</option>
                                            <option value="Sports development officer">	Sports development officer</option>
                                            <option value="Stage manager, theatre">	Stage manager, theatre</option>
                                            <option value="Statistician">	Statistician</option>
                                            <option value="Stockbroker/portfolio manager">	Stockbroker/portfolio manager</option>
                                            <option value="Structural engineer">	Structural engineer</option>
                                            <option value="Systems analyst/business analyst">	Systems analyst/business analyst</option>
                                            <option value="Tax adviser/consultant">	Tax adviser/consultant</option>
                                            <option value="Tax officer/inspector">	Tax officer/inspector</option>
                                            <option value="Teacher, adult education">	Teacher, adult education</option>
                                            <option value="Teacher, English as a Foreign Language">	Teacher, English as a Foreign Language</option>
                                            <option value="Teacher, learning support">	Teacher, learning support</option>
                                            <option value="Teacher, primary level">	Teacher, primary level</option>
                                            <option value="Teacher, second level">	Teacher, second level</option>
                                            <option value="Teacher, special education">	Teacher, special education</option>
                                            <option value="Technical sales">	Technical sales</option>
                                            <option value="Technical sales engineer">	Technical sales engineer</option>
                                            <option value="Technical support">	Technical support</option>
                                            <option value="Telecommunications engineer">	Telecommunications engineer</option>
                                            <option value="Theatre lighting technician">	Theatre lighting technician</option>
                                            <option value="Tourism officer">	Tourism officer</option>
                                            <option value="Town planner">	Town planner</option>
                                            <option value="Toxicologist">	Toxicologist</option>
                                            <option value="Training and development officer/manager">	Training and development officer/manager</option>
                                            <option value="Translator">	Translator</option>
                                            <option value="Transport/logistics manager">	Transport/logistics manager</option>
                                            <option value="Travel agent">	Travel agent</option>
                                            <option value="Veterinary surgeon/nurse">	Veterinary surgeon/nurse</option>
                                            <option value="Web developer">	Web developer</option>
                                            <option value="Writer, radio/TV/film">	Writer, radio/TV/film</option>
                                            <option value="Youth worker">	Youth worker</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="relation-ship1">How important in a relationship is the friendship between partners ? *</label>
                                        <select name="friendshipBetweenPartners"class="form-control" id="relation-ship1">
                                            <option value="">--Select--</option>
                                            <option value="Very Important">Very Important</option>
                                            <option value="Important">Important</option>
                                            <option value="Somewhat Important">Somewhat Important</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="income">Your Income *</label>
                                        <select class="form-control chosen-select" style="background-color:#fffdfd73;" id="income" name="income">
                                            <option value="">-Select-</option>
                                            <option value="Less than $5000">Less than $5000</option>
                                            <option value="$1 - $5000">$1 - $5000</option>
                                            <option value="$5000 - $10000">$5000 - $10000</option>
                                            <option value="$10,000 - $30,000">$10,000 - $30,000</option>
                                            <option value="$30,000 - $50,000">$30,000 - $50,000</option>
                                            <option value="$50,000 - $100,000">$50,000 - $100,000</option>
                                            <option value="$100,000 - $300,000">$100,000 - $300,000</option>
                                            <option value="$300,000 - $1000,000">$300,000 - $1000,000</option>
                                            <option value="N/A">N/A</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="sexual_compatibility">How important in a relationship is sexual compatibility ? *</label>
                                        <select class="form-control chosen-select" style="background-color:#fffdfd73;" id="sexual_compatibility" name="sexual_compatibility">
                                            <option value="">-Select-</option>
                                            <option value="Sometime">Sometime</option>
                                            <option value="What is that">What is that</option>
                                            <option value="Very Important">Very Important</option>
                                            <option value="Important">Important</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exercise">How often do you exercise ? *</label>
                                        <select class="form-control chosen-select" style="background-color:#fffdfd73;" id="exercise" name="exercise">
                                            <option value="">-Select-</option>
                                            <option value="Regularly">Regularly</option>
                                            <option value="Once a Week">Once a Week</option>
                                            <option value="Five, three, two time a week">Five, three, two time a week</option>
                                            <option value="What that">What that</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="longest_relationship">What is the longest relationship you have been in ? *</label>
                                        <select class="form-control chosen-select" style="background-color:#fffdfd73;" id="longest_relationship" name="longest_relationship">
                                            <option value="">-Select-</option>
                                            <option value="1 Year">1 Year</option>
                                            <option value="2 Year">2 Years</option>
                                            <option value="3-6 Years">3-6 Years</option>
                                            <option value="Longer">Longer</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="education_level">What's your education level ? *</label>
                                        <select class="form-control chosen-select" style="background-color:#fffdfd73;" id="education_level" name="education_level">
                                            <option value="">-Select-</option>
                                            <option value="Level 4 - GED Certificate">Level 4 - GED Certificate</option>
                                            <option value="Level 5 - High School Diploma">Level 5 - High School Diploma</option>
                                            <option value="Level 6 - Bachelors">Level 6 - Bachelor's</option>
                                            <option value="Level 7 - Masters">Level 7 - Masters</option>
                                            <option value="Level 8 - Doctorate">Level 8 - Doctorate</option>
                                            <option value="Level AA">Level AA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="control-label" for="country"><b>Are you on any medication ? <span class="text-danger">*</span></b></label>
                                        <select class="form-control chosen-select" style="background-color:#fffdfd73;" id="medication" name="medication">
                                            <option value="">-Select-</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <input class="btn btn-info" type="submit" value="Submit">
</fieldset>
