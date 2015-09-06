/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {

    "use strict";
    var im='images/',
        aud='media/',
        vid='media/',
        js='js/',
        fonts = {
        },
        opts = {
            'gAudioPreloadPreference': 'auto',
            'gVideoPreloadPreference': 'auto'
        },
        resources = [
        ],
        scripts = [
        ],
        symbols = {
            "stage": {
                version: "5.0.1",
                minimumCompatibleVersion: "5.0.0",
                build: "5.0.1.386",
                scaleToFit: "none",
                centerStage: "none",
                resizeInstances: false,
                content: {
                    dom: [
                        {
                            id: 'Group',
                            type: 'group',
                            rect: ['7', '215px', '347', '131', 'auto', 'auto'],
                            c: [
                            {
                                id: 'Rectangle',
                                type: 'rect',
                                rect: ['0px', '0px', '36px', '131px', 'auto', 'auto'],
                                fill: ["rgba(236,184,44,0.00)",[90,[['rgba(232,180,44,0.99)',0],['rgba(255,255,255,1.00)',100]]]],
                                stroke: [0,"rgba(0,0,0,0.00)","none"]
                            },
                            {
                                id: 'RectangleCopy',
                                type: 'rect',
                                rect: ['44px', '0px', '36px', '131px', 'auto', 'auto'],
                                fill: ["rgba(236,76,192,0.00)",[90,[['rgba(232,76,188,0.99)',0],['rgba(255,255,255,1.00)',100]]]],
                                stroke: [0,"rgba(0,0,0,0.00)","none"]
                            },
                            {
                                id: 'RectangleCopy2',
                                type: 'rect',
                                rect: ['88px', '11px', '36px', '120px', 'auto', 'auto'],
                                fill: ["rgba(124,196,236,0.00)",[90,[['rgba(124,192,232,0.99)',0],['rgba(255,255,255,1.00)',100]]]],
                                stroke: [0,"rgba(0,0,0,0.00)","none"]
                            },
                            {
                                id: 'RectangleCopy3',
                                type: 'rect',
                                rect: ['132px', '50px', '36px', '81px', 'auto', 'auto'],
                                fill: ["rgba(104,208,88,0.00)",[90,[['rgba(104,204,88,0.99)',0],['rgba(255,255,255,1.00)',100]]]],
                                stroke: [0,"rgba(0,0,0,0.00)","none"]
                            },
                            {
                                id: 'RectangleCopy4',
                                type: 'rect',
                                rect: ['176px', '66px', '36px', '65px', 'auto', 'auto'],
                                fill: ["rgba(164,112,192,0.00)",[90,[['rgba(160,112,188,0.99)',0],['rgba(255,255,255,1.00)',100]]]],
                                stroke: [0,"rgba(0,0,0,0.00)","none"]
                            },
                            {
                                id: 'RectangleCopy5',
                                type: 'rect',
                                rect: ['221px', '30px', '36px', '101px', 'auto', 'auto'],
                                fill: ["rgba(8,156,220,0.00)",[90,[['rgba(8,152,216,0.99)',0],['rgba(255,255,255,1.00)',100]]]],
                                stroke: [0,"rgba(0,0,0,0.00)","none"]
                            },
                            {
                                id: 'RectangleCopy6',
                                type: 'rect',
                                rect: ['266px', '38px', '36px', '93px', 'auto', 'auto'],
                                fill: ["rgba(72,180,52,0.00)",[90,[['rgba(72,176,52,0.99)',0],['rgba(255,255,255,1.00)',100]]]],
                                stroke: [0,"rgba(0,0,0,0.00)","none"]
                            },
                            {
                                id: 'RectangleCopy7',
                                type: 'rect',
                                rect: ['311px', '24px', '36px', '107px', 'auto', 'auto'],
                                fill: ["rgba(224,60,16,0.00)",[90,[['rgba(220,60,16,0.99)',0],['rgba(255,255,255,1.00)',100]]]],
                                stroke: [0,"rgba(0,0,0,0.00)","none"]
                            }]
                        },
                        {
                            id: 'VALKOINEN',
                            type: 'rect',
                            rect: ['-18px', '144px', '384px', '76px', 'auto', 'auto'],
                            fill: ["rgba(255,255,255,1.00)"],
                            stroke: [0,"rgba(0, 0, 0, 0)","none"]
                        },
                        {
                            id: 'Group2',
                            type: 'group',
                            rect: ['7', '217px', '347', '39', 'auto', 'auto'],
                            opacity: '0',
                            c: [
                            {
                                id: 'Ai3',
                                type: 'image',
                                rect: ['0px', '0px', '36px', '36px', 'auto', 'auto'],
                                fill: ["rgba(0,0,0,0)",im+"Ai3.png",'0px','0px']
                            },
                            {
                                id: 'Ps2',
                                type: 'image',
                                rect: ['88px', '0px', '36px', '36px', 'auto', 'auto'],
                                fill: ["rgba(0,0,0,0)",im+"Ps2.png",'0px','0px']
                            },
                            {
                                id: 'Pr2',
                                type: 'image',
                                rect: ['176px', '0px', '36px', '36px', 'auto', 'auto'],
                                fill: ["rgba(0,0,0,0)",im+"Pr2.png",'0px','0px']
                            },
                            {
                                id: 'Microsoft-Word-Mac-icon2',
                                type: 'image',
                                rect: ['220px', '0px', '36px', '36px', 'auto', 'auto'],
                                fill: ["rgba(0,0,0,0)",im+"Microsoft-Word-Mac-icon2.png",'0px','0px']
                            },
                            {
                                id: 'Microsoft-PowerPoint-Mac-icon_22',
                                type: 'image',
                                rect: ['311px', '3px', '36px', '36px', 'auto', 'auto'],
                                fill: ["rgba(0,0,0,0)",im+"Microsoft-PowerPoint-Mac-icon_22.png",'0px','0px']
                            },
                            {
                                id: 'Microsoft-Excel-Mac-icon_22',
                                type: 'image',
                                rect: ['266px', '0px', '36px', '36px', 'auto', 'auto'],
                                fill: ["rgba(0,0,0,0)",im+"Microsoft-Excel-Mac-icon_22.png",'0px','0px']
                            },
                            {
                                id: 'Id2',
                                type: 'image',
                                rect: ['44px', '0px', '36px', '36px', 'auto', 'auto'],
                                fill: ["rgba(0,0,0,0)",im+"Id2.png",'0px','0px']
                            },
                            {
                                id: 'Dw2',
                                type: 'image',
                                rect: ['132px', '0px', '36px', '36px', 'auto', 'auto'],
                                fill: ["rgba(0,0,0,0)",im+"Dw2.png",'0px','0px']
                            }]
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: ['null', 'null', '360px', '190px', 'auto', 'auto'],
                            overflow: 'hidden',
                            fill: ["rgba(255,255,255,1)"]
                        }
                    }
                },
                timeline: {
                    duration: 2000,
                    autoPlay: true,
                    data: [
                        [
                            "eid9",
                            "top",
                            817,
                            1183,
                            "linear",
                            "${Group}",
                            '215px',
                            '12px'
                        ],
                        [
                            "eid4",
                            "opacity",
                            0,
                            750,
                            "linear",
                            "${Group2}",
                            '0',
                            '1'
                        ],
                        [
                            "eid2",
                            "top",
                            0,
                            750,
                            "linear",
                            "${Group2}",
                            '217px',
                            '143px'
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load("Animation_final_edgeActions.js");
})("EDGE-151894875");
