<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <title>Our Team</title>
    <link rel="stylesheet" href="css/team-style.css">
        <!-- Favicon -->
    <link href="images/logo.jpeg" rel="icon">

</head>
<body>

<div style="margin-bottom: 50px;">
  @include('partials.navbar')
</div>

<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
      <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
          <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our Team</h2>
          <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Explore the diverse expertise and innovative spirit that drive our success. Our dedicated team of professionals is committed to leveraging cutting-edge technology to create impactful solutions in education, healthcare, and beyond. Together, we pioneer advancements and strive to make a difference in the world through collaboration and excellence.</p>
      </div> 
      <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
            {{-- CEO Section --}}
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700 flex-container sm:flex-row flex-col">
              <a href="#" target="_blank">
                  <img class=" rounded-lg sm:rounded-none sm:rounded-l-lg fixed-height" src="images/ceo.jpg" alt="Bonnie Avatar">
              </a>
              <div class="p-5 content sm:w-auto w-full">
                  <div>
                      <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                          <a href="#" target="_blank">Heritier Shebindu Adam, Msc Eng.</a>
                      </h3>
                      <span class="text-gray-500 dark:text-gray-400">Founder and CEO</span>
                      <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Adam is a mechanical engineer with degrees from Texas Tech University, specializing in thermofluids. He is now pursuing a PhD in Biomedical Engineering at The University of Texas at Dallas.</p>
                  </div>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                              <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li>
                          <a href="https://twitter.com/AdamHeritier" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fab fa-twitter"></i>
                            </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                  </ul>
              </div>
          </div> 
           {{-- CTO Section --}}
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700 flex-container sm:flex-row flex-col">
              <a href="#" target="_blank">
                  <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg fixed-height" src="images/cto.png" alt="Bonnie Avatar">
              </a>
              <div class="p-5 content sm:w-auto w-full">
                  <div>
                      <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                          <a href="#" target="_blank">Ongoriko Bindu Gael</a>
                      </h3>
                      <span class="text-gray-500 dark:text-gray-400">CTO & Software Engineer</span>
                      <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Ongoriko Bindu Gael is a seasoned software engineer and the CTO at Bora Technology, specializing in AI and VR technologies. He has developed innovative projects like AI-powered educational tools and immersive VR simulations, driving advancements in tech education and healthcare.</p>
                  </div>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="https://twitter.com/GaelOngoriko" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fab fa-twitter"></i>
                            </a>
                      </li>
                      <li>
                          <a href="https://www.linkedin.com/in/gael-ongoriko-8a8846251/" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                      <li>
                          <a href="https://github.com/gaelxxl34" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                          </a>
                      </li>
                    
                  </ul>
              </div>
          </div> 
            {{-- Vice president--}}
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700 flex-container sm:flex-row flex-col">
              <a href="#" target="_blank">
                  <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg fixed-height" src="images/vice president.jpeg" alt="Bonnie Avatar">
              </a>
              <div class="p-5 content sm:w-auto w-full">
                  <div>
                      <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                          <a href="#" target="_blank">Parfait Masungi</a>
                      </h3>
                      <span class="text-gray-500 dark:text-gray-400">Vice president</span>
                      <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Parfait, from Kinshasa, DRC, is passionate about math, science, engineering, and leadership. As a civil engineer, he aims to revolutionize Congo's infrastructure and education, focusing on renewable energy and technological advancements.</p>
                  </div>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                              <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fab fa-twitter"></i>
                            </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                      </li>
                  </ul>
              </div>
          </div> 
          {{-- Vice president 2--}}
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700 flex-container sm:flex-row flex-col">
              <a href="#" target="_blank">
                  <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg fixed-height" src="images/Nathan.jpeg" alt="Bonnie Avatar">
              </a>
              <div class="p-5 content sm:w-auto w-full">
                  <div>
                      <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                          <a href="#" target="_blank">Nathan Muteba</a>
                      </h3>
                      <span class="text-gray-500 dark:text-gray-400">Vice president</span>
                      <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Nathan Muteba is an electrical engineering student minoring in math and physics at Texas A&M University. He has showcased engineering solutions, like an autonomous drone and AI predictive analysis models, across various industries. His hobbies include watching anime, movies, documentaries, studying history, and meditating in parks.</p>
                  </div>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                              <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fab fa-twitter"></i>
                            </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                      </li>
                  </ul>
              </div>
          </div> 
            {{-- Daniel Katusele--}}
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700 flex-container sm:flex-row flex-col">
              <a href="#" target="_blank">
                  <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg fixed-height" src="images/Daniel Katusele.png" alt="Bonnie Avatar">
              </a>
              <div class="p-5 content sm:w-auto w-full">
                  <div>
                      <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                          <a href="#" target="_blank">Daniel Katusele</a>
                      </h3>
                      <span class="text-gray-500 dark:text-gray-400">Civil Engineer</span>
                      <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">PhD Candidate at Carnegie Mellon University</p>
                  </div>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                              <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fab fa-twitter"></i>
                            </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                      </li>
                  </ul>
              </div>
          </div> 
          {{-- Yvette Kalimumbalo--}}
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700 flex-container sm:flex-row flex-col">
              <a href="#" target="_blank">
                  <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg fixed-height" src="images/Yvette Kalimumbalo.jpeg" alt="Bonnie Avatar">
              </a>
              <div class="p-5 content sm:w-auto w-full">
                  <div>
                      <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                          <a href="#" target="_blank">Yvette Kalimumbalo</a>
                      </h3>
                      <span class="text-gray-500 dark:text-gray-400">Software Engineer</span>
                      <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Yvette, finalist in Computer Engineering at ULPGL/Goma, BEBUC Scholar, Makutano & Investing in people STEM Scholar, Vice President of the Groupe d’Echange Scientifique pour l’Innovation dans les Technologies (Gesi-Technologies). Passionate about New Technologies of Information and Communication (NTIC) and Artificial Intelligence</p>
                  </div>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                              <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fab fa-twitter"></i>
                            </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                      </li>
                  </ul>
              </div>
          </div> 
            {{-- Naomi Mirindi--}}
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700 flex-container sm:flex-row flex-col">
              <a href="#" target="_blank">
                  <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg fixed-height" src="images/Naomi Mirindi.jpeg" alt="Bonnie Avatar">
              </a>
              <div class="p-5 content sm:w-auto w-full">
                  <div>
                      <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                          <a href="#" target="_blank">Naomi Mirindi</a>
                      </h3>
                      <span class="text-gray-500 dark:text-gray-400">Lead Chemical Engineer</span>
                      <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Naomie is a Congolese chemical engineer, graduated from the University of Lubumbashi in the Democratic Republic of Congo.After graduating from a bachelor's degree, Naomie pursued her master's degree in Organic Chemical Engineering, which she earned with distinction. Conscientious and discreet, Naomie is passionate about research in bioengineering and bio-based industries.</p>
                  </div>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                              <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fab fa-twitter"></i>
                            </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                      </li>
                  </ul>
              </div>
          </div> 
           {{-- Pascal Malira--}}
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700 flex-container sm:flex-row flex-col">
              <a href="#" target="_blank">
                  <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg fixed-height" src="images/Pascal Malira.jpeg" alt="Bonnie Avatar">
              </a>
              <div class="p-5 content sm:w-auto w-full">
                  <div>
                      <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                          <a href="#" target="_blank">Pascal Malira</a>
                      </h3>
                      <span class="text-gray-500 dark:text-gray-400">Electrical/Electronics engineer</span>
                      <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Ir. Malira Amani Pascal, born in Goma on April 16, 1996, is an electrical engineer. He studied at KARISIMBI Primary School and Mwanga College, and is completing his degree at ULPGL-Goma. Pascal is passionate about electrical research and serves in the Gospel music group La Moisson.</p>
                  </div>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                              <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fab fa-twitter"></i>
                            </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                      </li>
                  </ul>
              </div>
          </div> 
            {{-- David Tusadiki--}}
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700 flex-container sm:flex-row flex-col">
              <a href="#" target="_blank">
                  <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg fixed-height" src="images/David Tusadiki.png" alt="Bonnie Avatar">
              </a>
              <div class="p-5 content sm:w-auto w-full">
                  <div>
                      <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                          <a href="#" target="_blank">David Tusadiki</a>
                      </h3>
                      <span class="text-gray-500 dark:text-gray-400">Mechanical Engineer</span>
                      <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">David Tusadiki Fakandi, an electromechanical engineer with a BAC+3 degree from the University of Lubumbashi, interned at RUASHI Mining and secured a scholarship from MMG/Kinsevere. He is skilled in designing mechanical and electrical schematics and enjoys reading and listening to classical music.</p>
                  </div>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                              <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fab fa-twitter"></i>
                            </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                      </li>
                  </ul>
              </div>
          </div> 
            {{-- Parfait Onema--}}
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700 flex-container sm:flex-row flex-col">
              <a href="#" target="_blank">
                  <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg fixed-height" src="images/Parfait Onem.jpeg" alt="Bonnie Avatar">
              </a>
              <div class="p-5 content sm:w-auto w-full">
                  <div>
                      <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                          <a href="#" target="_blank">Parfait Onema</a>
                      </h3>
                      <span class="text-gray-500 dark:text-gray-400">Electrical Engineer</span>
                      <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Parfait LUTUNDULA is an optimistic, hardworking and a highly motivated person with a strong passion to build a sustainable world. In July 2019, he received a BSc in Electrical Engineering (with honours) at Sapientia Catholic University(Goma-DRC). Since then he was appointed Teaching Assistant at the same university, where he is conducting researches in the areas of power electronic, renewable energy and smart grid. He has served as an Energy Consultant of Tech_power services where he conducted many design project of rural electrification in DRC. In March 2020, he joined a team of Bora Technology, and he is currently working as an Electrical Engineer.</p>
                  </div>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                              <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fab fa-twitter"></i>
                            </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                      </li>
                  </ul>
              </div>
          </div> 
            {{-- Joel Ilunga--}}
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700 flex-container sm:flex-row flex-col">
              <a href="#" target="_blank">
                  <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg fixed-height" src="images/Joel Ilunga.jpeg" alt="Bonnie Avatar">
              </a>
              <div class="p-5 content sm:w-auto w-full">
                  <div>
                      <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                          <a href="#" target="_blank">Joel Ilunga</a>
                      </h3>
                      <span class="text-gray-500 dark:text-gray-400">Mechanical Engineer</span>
                      <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Joël is an electromechanical engineer passionate about thermal systems and air conditioning. He designs HVAC projects for buildings, evaluating thermal balances and recommending suitable air conditioning units. Joël also has advanced knowledge in industrial and domestic refrigeration systems, focusing on pumps and compressors. His experience in the mining industry has honed his skills in maintaining and installing these systems, and he is proficient in electrical work related to powering and controlling electric motors.</p>
                  </div>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                              <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fab fa-twitter"></i>
                            </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                      </li>
                  </ul>
              </div>
          </div> 
           {{-- Aristide Kambale--}}
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700 flex-container sm:flex-row flex-col">
              <a href="#" target="_blank">
                  <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg fixed-height" src="images/Aristide Kambale.jpeg" alt="Bonnie Avatar">
              </a>
              <div class="p-5 content sm:w-auto w-full">
                  <div>
                      <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                          <a href="#" target="_blank">Aristide Kambale</a>
                      </h3>
                      <span class="text-gray-500 dark:text-gray-400">Environmental Engineer</span>
                      <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Aristide is a youth activist who enjoys solving problems and bringing ideas to life. He holds a bachelor's degree in environmental science & engineering and currently pursuing his Masters's degree at The University of Edinburgh. He has a strong passion for a safer environment for all species on earth both now and in the future. Thus, as an environmental analyst and researcher, he conducts and coordinates research activities to ensure there is much data available to help organizations reduce their carbon footprints whilst ensuring sustainability. He values Integrity, Teamwork, Respect, Honesty, and Creativity.</p>
                  </div>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                              <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fab fa-twitter"></i>
                            </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                      </li>
                  </ul>
              </div>
          </div> 
            {{-- François A. Citera--}}
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700 flex-container sm:flex-row flex-col">
              <a href="#" target="_blank">
                  <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg fixed-height" src="images/François A. Citera.jpeg" alt="Bonnie Avatar">
              </a>
              <div class="p-5 content sm:w-auto w-full">
                  <div>
                      <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                          <a href="#" target="_blank">François A. Citera</a>
                      </h3>
                      <span class="text-gray-500 dark:text-gray-400">Assistant Financial Manager</span>
                      <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Aristide is a youth activist who enjoys solving problems and bringing ideas to life. He holds a bachelor's degree in environmental science & engineering and currently pursuing his Masters's degree at The University of Edinburgh. He has a strong passion for a safer environment for all species on earth both now and in the future. Thus, as an environmental analyst and researcher, he conducts and coordinates research activities to ensure there is much data available to help organizations reduce their carbon footprints whilst ensuring sustainability. He values Integrity, Teamwork, Respect, Honesty, and Creativity.</p>
                  </div>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                              <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fab fa-twitter"></i>
                            </a>
                      </li>
                      <li>
                          <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                      </li>
                  </ul>
              </div>
          </div> 
      </div>  
  </div>
</section>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6696e44bbecc2fed69266c37/1i2umniqa';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

@include('partials.footer')
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

</body>
</html>
