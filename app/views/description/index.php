<!-- start of wrapper -->
<script>

    function display($table) {
        var info = document.getElementById($table);

        if (info.style.display ==='' ){
            info.style.display = 'none';
        }else if (info.style.display === 'none'){
            info.style.display = '';
        }
    }



</script>
<div class="wrapper">


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Home</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="http://localhost">Home</a></li>
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!--     /.content-header -->


        <!--     Main content -->
        <section class="content">
            <div class="container-fluid">
                <h1>Informal description</h1>
                <p>
                    A limited dataset of vetted Canadian Soil Information Service holdings for location specific soils
                    data extracted from Agriculture and Agri-Food Canada’s National Pedon Database (NPDB). The NPDB is a
                    central repository for storing and disseminating location-specific (pedon) soils data from across
                    Canada.
                </p>
                <div class="row col-12">
                    <div class="col-1">
                        <input type="button" value="Info" onclick="display('Info')"/></div>
                    <div class="col-1">
                        <input type="button" value="Sites" onclick="display('Sites')"/></div>
                    <div class="col-1">
                        <input type="button" value="Profiles" onclick="display('Profiles')"/></div>
                    <div class="col-1">
                        <input type="button" value="Horizons" onclick="display('Horizons')"/></div>
                    <div class="col-1">
                        <input type="button" value="Morphology" onclick="display('Morphology')"/></div>
                    <div class="col-1">
                        <input type="button" value="Physical" onclick="display('Physical')"/></div>
                    <div class="col-1">
                        <input type="button" value="Chemical" onclick="display('Chemical')"/></div>
                </div>
                <div class="row col-12">
                    <table id="Info" style="display: none" class="col-12">
                        <tr>
                            <td>Column name</td>
                            <td>Definition</td>
                        </tr>
                        <tr>
                            <td>PEDON_ID</td>
                            <td>Pedon identifier</td>
                        </tr>

                        <tr>
                            <td>PROVINCE</td>
                            <td>Province where pedon was sampled</td>
                        </tr>
                        <tr>
                            <td>CAL_YEAR</td>
                            <td>Year</td>
                        </tr>
                        <tr>
                            <td>CSSC_ORDER</td>
                            <td>Identifies the soil order according to the Canadian System of Soil Classification</td>
                        </tr>
                        <tr>
                            <td>CSSC_GTGRP</td>
                            <td>Identifies the soil great group according to the Canadian System of Soil
                                Classification
                            </td>
                        </tr>
                        <tr>
                            <td>CSSC_SBGRP</td>
                            <td>Identifies the soil subgroup according to the Canadian System of Soil Classification
                            </td>
                        </tr>

                        <tr>
                            <td>CSSC_NAME</td>
                            <td>Identifies the Series Name according to the Canadian System of Soil Classification</td>
                        </tr>

                        <tr>
                            <td>CSSC_CODE</td>
                            <td>Identifies the Series Code according to the Canadian System of Soil Classification</td>
                        </tr>

                        <tr>
                            <td>TX_FACTOR1</td>
                            <td>First deviating factor distinguishing a soil sample from a modal pedon of its soil
                                series (e.g. soil depth,
                                colour)
                            </td>
                        </tr>

                        <tr>
                            <td>TX_FACTOR2</td>
                            <td>Second deviating factor distinguishing a soil sample from a modal pedon of its soil
                                series (e.g. soil depth,
                                colour)
                            </td>
                        </tr>

                        <tr>
                            <td>TX_FIT</td>
                            <td>A description for the relationship between a soil and its taxonomic class</td>
                        </tr>

                        <tr>
                            <td>EXTENT</td>
                            <td>Extent relative to other soils in the survey area</td>
                        </tr>
                        <tr>
                            <td>LANDUSE</td>
                            <td>Site land use</td>
                        </tr>

                        <tr>
                            <td>ELEVATION</td>
                            <td>Elevation (metres)</td>
                        </tr>

                        <tr>
                            <td>DD_LAT</td>
                            <td>Latitude expressed as decimal degrees</td>
                        </tr>
                        <tr>
                            <td>DD_LONG</td>
                            <td>Longitude expressed as decimal degrees</td>
                        </tr>
                        <tr>
                            <td>CONF_METRS</td>
                            <td>Estimated location accuracy of pedon (metres)</td>
                        </tr>
                        <tr>
                            <td>PURPOSE</td>
                            <td>Purpose of Sampling</td>
                        <tr>
                        <tr>
                            <td>LOCALITY</td>
                            <td>A descriptive term to help identify the location of a sample below the level Province,
                                County, Township,
                                Road Junction
                            </td>
                        </tr>
                        <tr>
                            <td>PED_NOTES</td>
                            <td>Notes regarding pedon</td>
                        </tr>
                        <tr>
                            <td>N_MORPH</td>
                            <td>Quantity of pedon attributes in the Pedon Morphology table</td>
                        </tr>

                        <tr>
                            <td>N_SITES</td>
                            <td>Quantity of pedon attributes in the Pedon Sites table</td>
                        </tr>

                        <tr>
                            <td>N_PROFILES</td>
                            <td>Quantity of pedon attributes in the Pedon Profiles table</td>
                        </tr>

                        <tr>
                            <td>N_HORIZONS</td>
                            <td>Quantity of pedon attributes in the Pedon Horizons table</td>
                        <tr>

                        <tr>
                            <td>N_PHYSICAL</td>
                            <td>Quantity of pedon attributes in the Pedon Physical table</td>
                        </tr>

                        <tr>
                            <td>N_CHEMICAL</td>
                            <td>Quantity of pedon attributes in the Pedon Chemical table</td>
                        </tr>

                        <tr>
                            <td>REPORT_ID</td>
                            <td>Provincial soil survey report ID</td>
                        </tr>


                    </table>

                    <table id="Sites" style="display: none"  class="col-12">
                        <tr>
                            <td>Column name</td>
                            <td>Definition</td>
                        </tr>

                        <tr>
                            <td>PEDON_ID</td>
                            <td>Pedon identifier</td>
                        </tr>

                        <tr>
                            <td>GEN_MAT1</td>
                            <td>Primary genetic material at a landscape scale</td>
                        </tr>

                        <tr>
                            <td>GEN_MAT2</td>
                            <td>Secondary genetic material at a landscape scale</td>
                        </tr>
                        <tr>
                            <td>GMAT1_MOD1</td>
                            <td>Primary modifier for the primary genetic material at a landscape scale</td>
                        </tr>
                        <tr>
                            <td>GMAT1_MOD2</td>
                            <td>Secondary modifier for the primary genetic material at a landscape scale</td>
                        </tr>
                        <tr>
                            <td>GMAT1_MOD3</td>
                            <td>Tertiary modifier for the primary genetic material at a landscape scale</td>
                        </tr>
                        <tr>
                            <td>SURF_EXP_1</td>
                            <td>Primary surface expression at a landscape scale</td>
                        </tr>

                        <tr>
                            <td>SURF_EXP_2</td>
                            <td>Secondary surface expression at a landscape scale</td>
                        </tr>

                        <tr>
                            <td>MOD_PROC_1</td>
                            <td>Primary modifying process for surface expression at a landscape scale</td>
                        </tr>

                        <tr>
                            <td>MOD_PROC_2</td>
                            <td>Secondary modifying process for surface expression at a landscape scale</td>
                        </tr>

                        <tr>
                            <td>MICRO_TOP</td>
                            <td>Estimated height of mounds and distance between them
                            </td>
                        </tr>

                        <tr>
                            <td>SLP_TYPE</td>
                            <td>Indicates if the slope is simple or complex</td>
                        </tr>

                        <tr>
                            <td>SLP_LENGTH</td>
                            <td>Average slope length from crest to depression (metres)</td>
                        </tr>
                        <tr>
                            <td>SLP_PITCH</td>
                            <td>Indicates the grade of the slope in percent (%)</td>
                        </tr>

                        <tr>
                            <td>SLP_POS</td>
                            <td>Slope position class for sample</td>
                        </tr>

                        <tr>
                            <td>SLP_ASPECT</td>
                            <td>Aspect of the pedon</td>
                        </tr>
                        <tr>
                            <td>ROCKINESS</td>
                            <td>Rockiness class respecting the percentage of the surface occupied by the exposed
                                bedrock.
                            </td>
                        </tr>
                        <tr>
                            <td>STONINESS</td>
                            <td>Stoniness class respecting the CanSIS stoniness definitions</td>
                        </tr>
                        <tr>
                            <td>LF_MATERL</td>
                            <td>Described as being: active, glacial-active, inactive, glacial-inactive.</td>
                        <tr>
                        <tr>
                            <td>PM1_MD_DEP</td>
                            <td>The mode of deposition of the uppermost parent material
                            </td>
                        </tr>
                        <!--                     sites-->
                    </table>

                    <table id="Profiles" style="display: none" class="col-12">

                        <tr>
                            <td>PEDON_ID</td>
                            <td>Pedon identifier</td>
                        </tr>

                        <tr>
                            <td>PM1_LIT_MD</td>
                            <td>Surface parent material’s lithological modifier</td>
                        </tr>
                        <tr>
                            <td>PM1_CHEM</td>
                            <td>The chemical composition class of the surface layer parent material</td>
                        </tr>

                        <tr>
                            <td>PM1_PHYS</td>
                            <td>The texture class of the surface parent material</td>
                        </tr>

                        <tr>
                            <td>PM1_WEATHR</td>
                            <td>Surface parent material’s predominant weathering process</td>
                        </tr>

                        <tr>
                            <td>PM2_MD_DEP</td>
                            <td>The mode of deposition of the second underlying parent material</td>
                        <tr>

                        <tr>
                            <td>PM2_LIT_MD</td>
                            <td>Second underlying parent material’s lithological modifier</td>
                        </tr>

                        <tr>
                            <td>PM2_CHEM</td>
                            <td>The chemical composition class of the second underlying parent material if present</td>
                        </tr>

                        <tr>
                            <td>PM2_PHYS</td>
                            <td>The texture class of the second underlying parent material.</td>
                        </tr>

                        <tr>
                            <td>PM2_WEATHR</td>
                            <td>Second underlying parent material’s predominant weathering process</td>
                        </tr>

                        <tr>
                            <td>DRAINAGE</td>
                            <td>Soil Drainage Classes</td>
                        </tr>

                        <tr>
                            <td>TABLE_KIND</td>
                            <td>Kind of Water Table</td>
                        </tr>

                        <tr>
                            <td>TABLE_DPTH</td>
                            <td>Distance to water table (meters). If more than 100cm, depth is coded as 99.9</td>
                        </tr>

                        <tr>
                            <td>ROCK_DPTH</td>
                            <td>Depth to bedrock (metres)</td>
                        </tr>

                        <tr>
                            <td>CACO3_DPTH</td>
                            <td>Depth to carbonates (metres)</td>
                        </tr>

                        <tr>
                            <td>PROF_NOTES</td>
                            <td>Notes regarding profile data</td>
                        </tr>
                        <tr>
                            <td>HUMUS_TYPE</td>
                            <td>Humus class based on material and degree of decomposition</td>
                        </tr>

                        <tr>
                            <td>HUMUS_FORM</td>
                            <td>Identifies the humus form as terrestrial or hydromorphic</td>
                        </tr>
                        <!--                    // profiles-->
                    </table>

                    <table id="Horizons"style="display: none"  class="col-12">

                        <tr>
                            <td>PEDON_ID</td>
                            <td>Pedon identifier</td>
                        </tr>
                        <tr>
                            <td>LAYER_ID</td>
                            <td>Sequential identifier for soil layer and/or horizon in a soil profile</td>
                        </tr>

                        <tr>
                            <td>L_DEPTH</td>
                            <td>Indicates the depth (cm) of the bottom of the horizon. For mineral soils the top of the
                                mineral material is chosen as depth zero, and for any organic layers that are present
                                (such as LFH) the values of both U_DEPTH and L_DEPTH will be negative.
                            </td>
                        </tr>

                        <tr>
                            <td>U_DEPTH</td>
                            <td>Indicates the depth (cm) to the top of the horizon. For mineral soils the top of the
                                mineral material is chosen as depth zero, and for any organic layers that are present
                                (such as LFH) the values of both U_DEPTH and L_DEPTH will be negative.
                            </td>
                        </tr>

                        <tr>
                            <td>MIN_THICK</td>
                            <td>Minimum layer thickness (cm)</td>
                        </tr>

                        <tr>
                            <td>MAX_THICK</td>
                            <td>Maximum layer thickness (cm)</td>
                        </tr>

                        <tr>
                            <td>HZN_MAS</td>
                            <td>Identifies the master horizon</td>
                        </tr>

                        <tr>
                            <td>HZN_SUF</td>
                            <td>Identifies the horizon suffix</td>
                        </tr>

                        <tr>
                            <td>HZN_MOD</td>
                            <td>Identifies any soil horizon modifier that may be present</td>
                        </tr>


                        <tr>
                            <td>HZN_LIT</td>
                            <td>Sequential identifier for distinctive lithologies as associated with horizons or soil
                                layers
                            </td>
                        </tr>

                        <tr>
                            <td>BNDRY_DIST</td>
                            <td>Description of the horizon’s lower boundary’s distinctness</td>
                        </tr>

                        <tr>
                            <td>BNDRY_FORM</td>
                            <td>Description of the horizon’s lower boundary’s form</td>
                        </tr>

                        <tr>
                            <td>HZN_NOTES</td>
                            <td>Notes regarding the horizon</td>
                        </tr>
                        <!--                    // horizons-->
                    </table>

                    <table id="Morphology" style="display: none" class="col-12">

                        <tr>
                            <td>PEDON_ID</td>
                            <td>Pedon identifier</td>
                        </tr>
                        <tr>
                            <td>LAYER_ID</td>
                            <td>Sequential identifier for soil layer and/or horizon in a soil profile</td>
                        </tr>

                        <tr>
                            <td>L_DEPTH</td>
                            <td>Indicates the depth (cm) of the bottom of the horizon. For mineral soils the top of the
                                mineral material is chosen as depth zero, and for any organic layers that are present
                                (such as LFH) the values of both U_DEPTH and L_DEPTH will be negative.
                            </td>
                        </tr>

                        <tr>
                            <td>U_DEPTH</td>
                            <td>Indicates the depth (cm) to the top of the horizon. For mineral soils the top of the
                                mineral material is chosen as depth zero, and for any organic layers that are present
                                (such as LFH) the values of both U_DEPTH and L_DEPTH will be negative.
                            </td>
                        </tr>

                        <tr>
                            <td>CONSIS_MST</td>
                            <td>Soil consistence when moist</td>
                        </tr>

                        <tr>
                            <td>CONSIS_DRY</td>
                            <td>Soil consistence when dry</td>
                        </tr>

                        <tr>
                            <td>CONSIS_WET</td>
                            <td>Soil consistence when wet</td>
                        </tr>

                        <tr>
                            <td>CONSIS_PLS</td>
                            <td>Soil plasticity</td>
                        </tr>

                        <tr>
                            <td>S_PRM_KIND</td>
                            <td>Kind of primary structure</td>
                        </tr>

                        <tr>
                            <td>S_PRM_GRAD</td>
                            <td>Grade of Primary Structure</td>
                        </tr>

                        <tr>
                            <td>S_PRM_SIZE</td>
                            <td>Primary structure size class</td>
                        </tr>

                        <tr>
                            <td>S_PRM_MOD</td>
                            <td>Primary structure kind modifier</td>
                        </tr>

                        <tr>
                            <td>S_SEC_GRAD</td>
                            <td>Grade of secondary structure</td>
                        </tr>

                        <tr>
                            <td>S_SEC_KIND</td>
                            <td>Secondary structure kind</td>
                        </tr>

                        <tr>
                            <td>S_SEC_MOD</td>
                            <td>Secondary structure kind modifier</td>
                        </tr>

                        <tr>
                            <td>S_SEC_SIZE</td>
                            <td>Secondary structure size class</td>
                        </tr>

                        <tr>
                            <td>COLOUR_1</td>
                            <td>Munsel Class for primary colour of soil matrix</td>
                        </tr>

                        <tr>
                            <td>COLOUR_2</td>
                            <td>Munsel Class for secondary colour of soil matrix</td>
                        </tr>

                        <tr>
                            <td>MOTTLE_FRQ</td>
                            <td>Mottle frequency class</td>
                        </tr>

                        <tr>
                            <td>MOTTLE_SZE</td>
                            <td>Mottles size class</td>
                        </tr>

                        <tr>
                            <td>ROOT_FREQ</td>
                            <td>Root frequency class</td>
                        </tr>

                        <tr>
                            <td>ROOT_THICK</td>
                            <td>Root thickness class</td>
                        </tr>

                        <tr>
                            <td>ROOT_LOCTN</td>
                            <td>Root location</td>
                        </tr>

                        <tr>
                            <td>ROOT_ORIEN</td>
                            <td>0</td>
                        </tr>

                        <tr>
                            <td>SALINITY</td>
                            <td>Saline class</td>
                        </tr>

                        <tr>
                            <td>EFFERVESC</td>
                            <td>Reaction class for addition of dilute HCl</td>
                        </tr>
                        <!--                    //Morphology-->
                    </table>

                    <table id="Chemical" style="display: none"  class="col-12">

                        <tr>
                            <td>PEDON_ID</td>
                            <td>Pedon identifier</td>
                        </tr>
                        <tr>
                            <td>LAYER_ID</td>
                            <td>Sequential identifier for soil layer and/or horizon in a soil profile</td>
                        </tr>

                        <tr>
                            <td>L_DEPTH</td>
                            <td>Indicates the depth (cm) of the bottom of the horizon. For mineral soils the top of the
                                mineral material is chosen as depth zero, and for any organic layers that are present
                                (such as LFH) the values of both U_DEPTH and L_DEPTH will be negative.
                            </td>
                        </tr>

                        <tr>
                            <td>U_DEPTH</td>
                            <td>Indicates the depth (cm) to the top of the horizon. For mineral soils the top of the
                                mineral material is chosen as depth zero, and for any organic layers that are present
                                (such as LFH) the values of both U_DEPTH and L_DEPTH will be negative.
                            </td>
                        </tr>

                        <tr>
                            <td>CARB_ORG</td>
                            <td>ndicates the percentage (%) of organic carbon by weight</td>
                        </tr>

                        <tr>
                            <td>PH_CACL2</td>
                            <td>Field pH determined using pH meter (0.1 M CaCl2)</td>
                        </tr>

                        <tr>
                            <td>PH_H2O</td>
                            <td>Field pH determined using pH meter (1:1 H2O)</td>
                        </tr>

                        <tr>
                            <td>CEC</td>
                            <td>Identifies the cation exchange capacity. (milliequivalents per 100 g (Meq/100g))</td>
                        </tr>

                        <tr>
                            <td>EXCH_CA</td>
                            <td>Portion of cation exchange occupied by calcium (Meq/100g)</td>
                        </tr>

                        <tr>
                            <td>EXCH__H</td>
                            <td>Portion of cation exchange occupied by hydrogen (Meq/100g)</td>
                        </tr>

                        <tr>
                            <td>EXCH__K</td>
                            <td>Portion of cation exchange occupied by potassium (Meq/100g)</td>
                        </tr>

                        <tr>
                            <td>EXCH__MG</td>
                            <td>Portion of cation exchange occupied by magnesium (Meq/100g)</td>
                        </tr>

                        <tr>
                            <td>EXCH__NA</td>
                            <td>Portion of cation exchange occupied by sodium (Meq/100g)</td>
                        </tr>

                        <tr>
                            <td>EXCH__AL</td>
                            <td>Portion of cation exchange occupied by aluminium (Meq/100g)</td>
                        </tr>

                        <tr>
                            <td>EXCH__PCHRG</td>
                            <td>Internal charge for clay crystals</td>
                        </tr>

                        <tr>
                            <td>BASE_SATN</td>
                            <td>Indicates the base saturation in milliequivalents per 100 g (Meq/100g))</td>
                        </tr>

                        <tr>
                            <td>X_ACIDITY</td>
                            <td>Exchangeable Hydrogen</td>
                        </tr>

                        <tr>
                            <td>NO3</td>
                            <td>Mass of nitrates in soil solution</td>
                        </tr>

                        <tr>
                            <td>N_TOTAL</td>
                            <td>Element nitrogen, as a fraction of a soil sample</td>
                        </tr>

                        <tr>
                            <td>AVAIL_K</td>
                            <td>Mass of potassium available for plant growth, as a percentage of a soil sample</td>
                        </tr>

                        <tr>
                            <td>P_INORG</td>
                            <td>Mass of inorganic phosphorus as a percentage of a soil sample</td>
                        </tr>

                        <tr>
                            <td>P_ORG</td>
                            <td>Mass of organic phosphorus as a percentage of a soil sample</td>
                        </tr>

                        <tr>
                            <td>CACO3_EQ</td>
                            <td>Indicates the calcium carbonate equivalent in percent (%)</td>
                        </tr>

                        <tr>
                            <td>CALCITE</td>
                            <td>Mass of calcite as a percentage of a soil sample</td>
                        </tr>

                        <tr>
                            <td>DOLOMITE</td>
                            <td>Mass of dolomite as a percentage of a soil sample</td>
                        </tr>
                        <!--                    //Chemical-->
                    </table>

                    <table id="Physical"style="display: none"  class="col-12">

                        <tr>
                            <td>PEDON_ID</td>
                            <td>Pedon identifier</td>
                        </tr>
                        <tr>
                            <td>LAYER_ID</td>
                            <td>Sequential identifier for soil layer and/or horizon in a soil profile</td>
                        </tr>

                        <tr>
                            <td>L_DEPTH</td>
                            <td>Indicates the depth (cm) of the bottom of the horizon. For mineral soils the top of the
                                mineral material is chosen as depth zero, and for any organic layers that are present
                                (such as LFH) the values of both U_DEPTH and L_DEPTH will be negative.
                            </td>
                        </tr>

                        <tr>
                            <td>U_DEPTH</td>
                            <td>Indicates the depth (cm) to the top of the horizon. For mineral soils the top of the
                                mineral material is chosen as depth zero, and for any organic layers that are present
                                (such as LFH) the values of both U_DEPTH and L_DEPTH will be negative.
                            </td>
                        </tr>

                        <tr>
                            <td>T_SILT</td>
                            <td>Indicates the total percentage (%) of silt, by weight</td>
                        </tr>

                        <tr>
                            <td>T_CLAY</td>
                            <td>Indicates the total percentage (%) of clay, by weight</td>
                        </tr>

                        <tr>
                            <td>T_SAND</td>
                            <td>Indicates the total percentage (%) of sand, by weight</td>
                        </tr>

                        <tr>
                            <td>VC_SAND</td>
                            <td>Indicates the percentage (%) of very coarse sand (1-2mm), by weight</td>
                        </tr>

                        <tr>
                            <td>C_SAND</td>
                            <td>Indicates the percentage (%) of coarse sand (0.5-1mm), by weight</td>
                        </tr>

                        <tr>
                            <td>F_SAND</td>
                            <td>Indicates the percentage (%) of fine sand (0.25-0.1mm), by weight</td>
                        </tr>

                        <tr>
                            <td>M_SAND</td>
                            <td>Indicates the percentage (%) of medium sand (0.25-0.5mm), by weight</td>
                        </tr>

                        <tr>
                            <td>VF_SAND</td>
                            <td>Indicates the percentage (%) of very fine sand (0.1-0.25mm), by weight</td>
                        </tr>

                        <tr>
                            <td>FIBRE</td>
                            <td>Proportion of organic material occupied by plant fibres</td>
                        </tr>

                        <tr>
                            <td>BULK_DEN</td>
                            <td>Identifies the bulk density. Values are for the fine earth fraction, excluding coarse
                                fragment content (g/cm3)
                            </td>
                        </tr>

                        <tr>
                            <td>RETN_HYGR</td>
                            <td>Water content in the field</td>
                        </tr>

                        <tr>
                            <td>RETN_0KP</td>
                            <td>Identifies water retention at 0 kp, in percent (%) by total soil volume</td>
                        </tr>

                        <tr>
                            <td>RETN_33KP</td>
                            <td>Identifies water retention at 33 kp, in percent (%) by total soil volume</td>
                        </tr>

                        <tr>
                            <td>RETN_1500K</td>
                            <td>Identifies water retention at 1500 kp, in percent (%) by total soil volume</td>
                        </tr>

                        <!--                    //Physical-->
                    </table>

                </div>

            </div>
    </div>
    <!-- end of Main content -->
</div>

<!-- wrapper end at footer file-->